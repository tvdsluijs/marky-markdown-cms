title: Gearman en Raspberry pi
link: http://vandersluijs.nl/blog/2014/09/gearman-en-raspberry-pi.html
author: tvdsluijs
description: 
post_id: 49
created: 2014/09/11 20:09:00
created_gmt: 2014/09/11 20:09:00
comment_status: open
post_name: gearman-en-raspberry-pi
status: publish
post_type: post

# Gearman en Raspberry pi

![raspberrypi](/content/images/2014/Sep/RaspberryPi.jpg)  
Op mijn werk hebben we een jaar geleden gekozen om bepaalde data verwerkingen en test's buiten het bedrijf te gaan doen. Na een half jaar de AWS service te hebben gebruikt van Amazon wilden we het anders gaan aanpakken.  
  
Helaas bleken de Amazon servers niet te voldoen voor wat we er mee wilden.  
  


## Gearman

  
  
Om goede security tests, snelheidstests te doen op onze webshop en om bepaalde data verwerking te doen hebben we servers nodig buiten om de ip reeks op het werk en buiten de ip reeds van onze servers waarop de webshops draaien.  
  
Daarnaast willen we van zo veel mogelijk verschillende knooppunten in nederland (en daarbuiten) kunnen testen.  
  
Om alle tests en dataverwerking te verspreiden over zoveel mogelijk servers (workers) hebben we Gearman ingezet.  
  


>   
Gearman is een opensource framework voor het distribueren van taken over meerdere systemen.  


  
  
Dat werkte prima, totdat we er achter kwamen dat de Amazon servers geheel niet zo snel werkten en de lijnen niet zo snel waren als we dachten.  
  
Dat gaf dus niet geheel goede resultaten terug.  
  


## Losse pc's als workers

  
  
Een collega kwam met het idee om losse oude pc's om te bouwen tot workers en deze mee te geven aan medewerkers.  
  
Ik vond het een goed idee, maar zag het niet echt zitten dat diverse medewerkers met een oude laptop of desktop onder hun arm naar huis moesten.  
  
Daarnaast zou die persoon het geheel moeten aansluiten, bij desktop op muis/keyboard en monitor en zouden ze waarschijnlijk ook nog halve IT-ers moeten zijn op de hele handel aan de gang te brengen.  
  
Nee ik wilde iets simpelers. En toen bedacht ik me ineens dat ik een half jaar geleden had zitten spelen met een Raspberry Pi.  
  


## Raspberry Pi

  
  


>   
De Raspberry Pi is een singleboardcomputer gebaseerd op ARM-processors die tegen een minimale prijs wordt vervaardigd en verkocht.   


  
  
Oftewel een kleine computer die in je binnenzak past bijna geen stroom vreet, eenvoudig is aan te sluiten en kan zelf opstarten.  
  
Het idee van de Raspberry Pi Worker was geboren!  
  
De zelfde week nog heb ik 2 Raspberry's besteld en heeft een collega de installatie inclusief Gearman worker gedaan.  
  
De installatie voor een niet-IT-er is super eenvoudig. UTP kabel er in, stroom er op... KLAAR !!!  
  
Binnen 1 minuut hing hij in mijn meterkast!   
  
![Gearman met Raspberry](/content/images/2014/Sep/20140128_172416_Burgemeester_C__Koertstraat.jpg)  
  
Na een week hadden we zulke goede resultaten dat we hier verder mee wilden gaan.  
  
Vandaag heb ik er nog 10 besteld! Het werk wat die kunnen doen haalt het bij lange na niet bij de AWS Amazon service.  
  
En mochten we er over een jaar toch mee stoppen... nou dan heeft iedereen een leuke mediaplayer thuis.