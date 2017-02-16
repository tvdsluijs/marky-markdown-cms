title: Backup mysql en files op Amazon AWS Bucket
link: http://vandersluijs.nl/blog/2015/01/backup-mysql-en-files-op-amazon-aws.html
author: tvdsluijs
description: 
post_id: 24
created: 2015/01/28 05:40:00
created_gmt: 2015/01/28 05:40:00
comment_status: open
post_name: backup-mysql-en-files-op-amazon-aws
status: publish
post_type: post

# Backup mysql en files op Amazon AWS Bucket

Je kent het wel... je hebt een site en nu die lekker draait en eigenlijk moet je wel eens de backups goed regelen.  
  
Voor mijn werk en voor mijn site [NopNop.nl](http://nopnop.nl/) wilde ik het wel goed geregeld hebben en heb ik met S3CMD de oplossing gemaakt.  
  
  
Mijn script verzorgt de backup van de MySQL databse de files, het comprimeren en het opslaan van de gecomprimeerde bestanden naar de Amazon AWS Bucket.  
  
Daarnaast laat hij de laatste twee backups op de server staan. Om de Bucket niet te vol te laten stromen, maakt het script een maand backup aan en ruimt het ook wat bestanden op binnen de Bucket.  
  
Boven in staan wat zaken wat je moet invullen met gegevens... en ook wat paden naar bestanden enz zal je moeten aanpassen. Het zal dus niet 100% aansluiten op jou omgeving.  
  
Maakt een bestand aan in bijvoorbeeld /var/backupscript/ via   

    
    
    cd /var
    
    mkdir backupscript
    
    cd backupscript/
    
    sudo nano backup_script.sh
    

  

    
    
    #!/bin/sh
    
    #"Dynamische gegevens voor backup proces"
    #hieronder wat gegevens aanpassen 
    THESITE="[WEBSITE]"
    THEDB="[DATABASENAAM]"
    THEDBUSER="[DATABASEUSER]"
    THEDBPW="[DATABASEPASSWORD]"
    BUCKETNAME="[BUCKETNAME]"
    #hierboven wat gegevens aanpassen 
    
    THEDATE=`date +%d%m%y` #als je per dag een backup wilt maken
    LASTDATE=$(date --date="1 week ago" +"%d%m%y")
    #THEDATE=`date +%d%m%y%H%M` als je per minuut een backup wilt maken!
    
    #dumpen en zippen van wiki database
    mysqldump -u $THEDBUSER -p${THEDBPW} $THEDB | gzip > /var/www/$THESITE/backups/dbbackup_${THEDB}_${THEDATE}.bak.gz
    
    #even zippen van de hele SITE
    tar czf /var/www/$THESITE/backups/sitebackup_${THESITE}_${THEDATE}.tar -C / var/www/$THESITE/public_html
    gzip /var/www/$THESITE/backups/sitebackup_${THESITE}_${THEDATE}.tar
    
    #via s3cmd protocol uploaden naar bucket
    s3cmd put /var/www/$THESITE/backups/dbbackup_${THEDB}_${THEDATE}.bak.gz s3://$BUCKETNAME/
    s3cmd put /var/www/$THESITE/backups/sitebackup_${THESITE}_${THEDATE}.tar.gz s3://$BUCKETNAME/
    
    #eerste van de maand? dan extra backup
    if [ `date +%d` == "01" ]
    then
       s3cmd put /var/www/$THESITE/backups/dbbackup_${THEDB}_${THEDATE}.bak.gz s3://$BUCKETNAME/monthbackup/
       s3cmd put /var/www/$THESITE/backups/sitebackup_${THESITE}_${THEDATE}.tar.gz s3://$BUCKETNAME/monthbackup/
    fi
    
    #eventuele oude backups op server (2 dagen) weggooien
    find /var/www/$THESITE/backups/site* -mtime +2 -exec rm {} ;
    find /var/www/$THESITE/backups/db* -mtime +2 -exec rm {} ;
    
    #backups weggooien op S3
    s3cmd del s3://$BUCKETNAME/dbbackup_${THEDB}_${LASTDATE}.bak.gz
    s3cmd del s3://$BUCKETNAME/sitebackup_${THESITE}_${LASTDATE}.tar.gz
    

Dit moet even draaien als je dit script hebt aangepast!!  

    
    
    chmod +x backup_script.sh
    

  
Daarna zal je even een cronjob moeten aanmaken waarmee dit script automatisch kan draaien.  
Maak de volgende regel aan in de crontab.  

    
    
    crontab -e
    

  
Zet er deze regel in!  

    
    
    59 23 * * *  bash /var/backup_scripts/wiki_backup.sh