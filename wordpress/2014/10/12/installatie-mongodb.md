title: Installatie MongoDB
link: http://vandersluijs.nl/blog/2014/10/installatie-mongodb.html
author: tvdsluijs
description: 
post_id: 34
created: 2014/10/12 15:48:00
created_gmt: 2014/10/12 15:48:00
comment_status: open
post_name: installatie-mongodb
status: publish
post_type: post

# Installatie MongoDB

![MongoDB installatie](/content/images/2014/10/mongoDB-logo.png)  
  
MongoDB is een open source NoSQL document-georiënteerde database. Er is geen database schema en records (documenten genaamd) worden in Binair JSON opgeslagen. Documenten / Records zijn flexibel en je zit dus niet vast aan hoe de velden heten, hoe groot ze zijn enz. MongoDB kent geen relationeel (DBS) databasemanagementsysteem en je kan geen joins gebruiken.  
  
MongoDB is hierdoor razendsnel en kan enorm groot zijn zonder aan snelheid in te hoeven boeten.  
  
Wil je ook MongoDB gebruiken.... dan is het wellicht handig dat je weet hoe je het instaleert.  
  


### Installatie van MongoDB

  
  
MongoDB kan op ieder OS geïnstalleerd worden. Of het nu Linux, Apple OS X of Windows is, het kan op bijna ieder systeem draaien.   
  
Zelf denk ik dat het het beste draait op een Linux gebaseerd systeem, maar als je het wil installeren op een windows bak ga gerust je gang.  
  
De uitleg hier onder zal op een linux gebaseerd systeem zijn, maar op de [MongoDB](http://docs.mongodb.org/manual/installation/) site zelf hebben ze voor ieder systeem wel een uitleg.  
  


### MongoDB & PHP

  
  
Hieronder leg ik uit hoe je MongoDB samen met de php extension kan installeren.  
  
Het zijn drie eenvoudige stappen, en ik denk dat wanneer je enige terminal (shell) ervaring hebt dat je het moet kunnen.  
  
Open een terminal en voer de volgende regels uit.  
  


##### Stap 1

  
  

    
    
    apt-get install php5-dev php5-cli php-pear    
    

  
  


##### Stap 2

  
  

    
    
    pecl install mongo    
    

  
  
Open daarna je php.ini file en voeg onder het kopje **extensions** het volgende toe  
  
extension=mongo.so  
  


>   
That's all!!  


  
  
Tja.... moeilijker dan dit wordt het echt niet :-)  
  
Waar **Stap 3** is?   
  
Oh ja....  
  


##### Stap 3

  
  
Veel plezier met het gebruik van MongoDB!  
  
MongoDB kan je ook installeren op een [Digital Ocean](https://www.digitalocean.com/?refcode=38909179d2dc) omgeving!