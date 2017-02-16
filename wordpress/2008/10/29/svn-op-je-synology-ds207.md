title: SVN op je Synology DS207
link: http://vandersluijs.nl/blog/2008/10/svn-op-je-synology-ds207.html
author: tvdsluijs
description: 
post_id: 480
created: 2008/10/29 20:32:00
created_gmt: 2008/10/29 20:32:00
comment_status: open
post_name: svn-op-je-synology-ds207
status: publish
post_type: post

# SVN op je Synology DS207

Ik heb dus een mooie Synology DS 207 gekocht met 2x 1 TB schijfjes er in. Dat leek me wel handig. Ik had een mooie Ubuntu server staan, maar die trok me toch wat te veel stroom. En hoe los je dat op.... door iets energie zuinigs te kopen... en neer te zetten. Via internet kwam ik er al snel achter dat de synology nas systemen redelijk zuinig zijn... zeker met wat groen gelabelde schijven er in. Alles wat mijn Ubuntu server kon... kan ook op de synology... out of the box..... behalve dan 1 ding.... namelijk SVN / Subversion. In deze korte handleiding leg ik uit hoe je dit toch op je Synology kan krijgen.   
  
Stap 1: Zorg dat je [putty](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html) of telnet verbinding hebt.  
Log aan met   root  
(je wachtwoord van de root is gelijk aan het wachtwoord van admin) Ik zelf vind putty erg makkelijk. Nog nooit met putty gewerkt ? [Klik hier](http://lacocina.nl/artikelen/putty.html).  
  
Stap 2.  
Download het volgende bestand ([IPKG](http://oinkzwurgl.org/dl.php?file=bootstrap-ppc.tar.gz)) en zet hem in je public directory op je synology bak.. Ik zelf wist niet hoe ik daar ff snel moest komen dus had ik hem in 1 van mijn zelfgemaakt directories gezet (in mijn geval download) Stap 3.  
Voer in  putty de volgende regels uit, 1 voor 1. (zet bij public eventueel de directory die jij zou kiezen) en geef na iedere regel een enter. 
    
    
    cd /  
    tar -xzvf /volume1/public/bootstrap-ppc.tar.gz  
    ln -s /volume1/opt /opt  
      
    /opt/bin/ipkg update  
    /opt/bin/ipkg upgrade  
      
    /opt/bin/ipkg install svn

  
Okay.. als je zover zonder foutmelding bent gekomen... gefeliciteerd ;-)  
Maar we gaan nu weer een stapje verder.  
Maak een shared folder via de synology web client, en maak hem zichtbaar voor explorer. Dan mag je straks je repositories gewoon via explorer benaderen. Dat is ook wel handig voor de config files die we gaan aanpassen.  
Sowieso is het handig om even een backup te draaien van alles op je synology servertje.  
Goed ik heb een svn directory aangemaakt.  
Nu gaan we een repository aan maken, zorg dat putty weer open staat.  

    
    
    svnadmin create /volume1/svn/repository

  
Zodra je repository is gemaakt open dan even de repository direcotry via de explorer. Hier kan je via een editor zoals notepad / editpad of notepad++ dat gebruik ik altijd, even de rechten en zo aanpassen. Hiervoor moet je in de file  repository/conf zijn.  
Je moet jezelf even als gebruiker toevoegen of eventueel anonymous toegang regelen in de svnserve.conf file.   
Okay terug naar putty en knal daar de volgende regel in  

    
    
    svnserve -d -r /volume1/svn/repository

  
Nu is de server gestart en kan je proberen om het vanaf je pc de repository te openen.  
Let op: wellicht moet je een keer je synology ds 207 rebooten voordat het werkt. Dit kan heel simpel ook via Putty via het commando  

    
    
    reboot

  
   
Tja... nu draait het wellicht allemaal heel mooi... maar als je je systeem reboot dan werkt het niet meer omdat de svn server dan niet draait.  
Dus zal je dit moeten laten opstarten als je systeem herstart.  
Je kan dit aanpassen in de rc config file die vind je  

    
    
    cd /etc  
    ls

  
Dan zie je hem staan.  
Laten we eerst even een backup van dit bestandje maken... voor het geval fout gaat.  

    
    
    cp /etc/cp /etc/cp.backup

  
Aanpassen kan via  

    
    
    vi rc

  
Doe het volgende, ga redelijk boven in maar onder de regel waarin het woord "PATH=/" staat en druk op de letter a  
Nu zit je in edit mode.  
Voeg de volgende regel toe  

    
    
    svnserve -d -r /volume1/svn/repository

  
Ga nu naar de regel (doormiddel van pijltje omhoog) waar in dus die PATH=/ staat.  
Ga achter de eerste : staan en voeg dit toe   

    
    
    opt/bin:/opt/sbin:

  
Okay nu gaan ge opslaan dat doe je via  

    
    
    :w

  
hierna sluiten met   

    
    
    :q

  
Klaar !!!  
Veel success met je SVN / SubVersion repository op je synology DS207  
   
Met dank aan diverse sites waaronder:  
<http://rob.runtothehills.org/archives/25>  
<http://wordaligned.org/articles/one-svnserve-multiple-repositories>