title: MongoDB backups op Amazon S3 met S3CMD
link: http://vandersluijs.nl/blog/2015/01/mongodb-backups-op-amazon-s3-met-s3cmd.html
author: tvdsluijs
description: 
post_id: 23
created: 2015/01/30 21:25:00
created_gmt: 2015/01/30 21:25:00
comment_status: open
post_name: mongodb-backups-op-amazon-s3-met-s3cmd
status: publish
post_type: post

# MongoDB backups op Amazon S3 met S3CMD

In mijn laatste post heb ik geschreven over de installatie, configuratie van S3CMD en hoe je eenvoudig backups kan maken van je MySQL databases en web files.  
  
In deze post leg ik uit hoe je heel eenvoudig een backup kan maken van je MongoDb op je Amazon s3 Bucket met S3CMD.  
  
Op veel van mijn sites zoals [NopNop.nl](http://www.nopnop.nl/), [Woodbrass.nl](http://www.woodbrass.nl/) en [GebruikMaar.nl](http://www.gebruikmaar.nl/) draai ik MongoDB dus ik vond het tijd dat ik maar eens een backup ging maken van deze databases op een andere cloud-omgeving dan mijn [DigitalOcean](https://www.digitalocean.com/?refcode=38909179d2dc) server. Ook maar op een Amazon S3 Bucket.  
  
Met onderstaand bash script kan je via een cronjob kinderlijk eenvoudig backups maken van je MongoDb. Het is eenvoudig aan te passen naar eigen wensen.  
  
  
Via deze weg is je MongoDB ook weer netjes gebackuped op een veilige Cloud omgeving.   


**_Ik hou van koffie... dus als je bovenstaande handig vond doneer dan._**

**_ Rechts boven in staan mijn doneer knoppen!_**