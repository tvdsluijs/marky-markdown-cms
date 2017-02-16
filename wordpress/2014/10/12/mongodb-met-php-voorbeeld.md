title: MongoDB met PHP voorbeeld
link: http://vandersluijs.nl/blog/2014/10/mongodb-met-php-voorbeeld.html
author: tvdsluijs
description: 
post_id: 35
created: 2014/10/12 15:00:00
created_gmt: 2014/10/12 15:00:00
comment_status: open
post_name: mongodb-met-php-voorbeeld
status: publish
post_type: post

# MongoDB met PHP voorbeeld

Toen ik een jaar of 4 geleden op het PF Congres over MongoDB hoorde was ik nogal sceptisch.  
  
Dat kwam deels doordat de persoon die er over vertelde het niet goed kon uitleggen. En deels omdat ik ooit al eens in mijn leven had gehoord dat ik alles moest vergeten over relationele databases en dat vond ik toen geen goed plan.  
  


### Lotus Notes

  
  
Het grappige was dat IBM jaren geleden al wist wat de kracht is van platte database structuren. Lotus Notes (bij de Lotus Notes cursus hoorde ik voor het eerst dat ik alles over relationele databases moest vergeten) is ook gebouwd op een platte database structuur en echt razend snel! Zo snel dat hij makkelijk het juiste document ophaalt behorende bij het lotus notes formulier uit een bak van honderduizenden zo niet miljoenen documenten.  
  


### MongoDB

  
  
Maar genoeg over het good old Lotes Notes, het gaat hier om MongoDB. Toen ik dus net hoorde over over MongoDB was ik er nogal sceptisch over. Wat MongoDB is ook een   
  


>   
document-georiënteerde database   


  
  
net zoals Lotus Notes (en da's zo oud!)  
  
MongoDB heeft geen schema en de documenten worden in de vorm van een BSON (binair JSON) opgeslagen. Geen Joins mogelijk dus.  
  
Wat heb je daar nou aan! Hoe sla ik dan iets op? Hoe haal ik er iets uit? Geen Joins? Hoe kan ik dan bijvoorbeeld orders bij klanten ophalen? Of adres gegevens?  
  
Heel simpel! Dat doe je door meerdere collections op te halen en deze zelf te combineren.  
  
Omdat het zo razend snel is in hele grote collections haal je gewoon alles los op!  
  
Een klein voorbeeld.  
  
Je wil alle meneer jansens hebben met hun adressen uit twee verschillende collections. En joinen kan dus niet!  
  
Dan haal je 1 eerst alle klanten op met als naam "Jansens" en met die klant id's haal je dan daarna de bijbehorende adressen op! In PHP of jou web taal voeg je daarna alles samen en daar heb je de join met gegevens :-)  
  


## Gegevens er in!

  
  
Okay, okay... heel leuk maar leg nou eens even uit hoe ik gegevens in MongoDB krijg!  
  
Ik ga er even vanuit dat je een MongoDB omgeving heb. Schrijf ik later nog wel een blog over. (bedenk me nu dat ik misschien eerst had moeten doen)  
  
Maar je hebt dus een MongoDB omgeving. Een database en een tabel maak je on the fly aan. Dus de eerste keer dat je er wat in stopt, maak je hem gelijk aan.  
  
  
  
Klaar!  
  
_ik zie dat ik een foutje heb gemaakt, bij laatste regel moet het geen $connection maar $m zijn_  
  


## Gegevens er uit

  
  
Gegevens eruit halen is net zo simpel als gegevens er in gooien.  
  
  
  
Zo zie je dat MongoDB super eenvoudig is om te gebruiken. En razend snel met zeer grote aantallen documenten (records).  
  
Binnenkort schrijf ik nog een stukje over MongoDB waarbij ik Groepeer, filter en sorteer in 1 MongoDB statement in PHP!