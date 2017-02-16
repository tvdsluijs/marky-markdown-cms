title: Mongodb aggregate $match, $and, $or in PHP
link: http://vandersluijs.nl/blog/2015/01/mongodb-aggregate-match-and-or-in-php.html
author: tvdsluijs
description: 
post_id: 29
created: 2015/01/09 17:58:00
created_gmt: 2015/01/09 17:58:00
comment_status: open
post_name: mongodb-aggregate-match-and-or-in-php
status: publish
post_type: post

# Mongodb aggregate $match, $and, $or in PHP

MongoDB! Sinds ik er mee begonnen ben, ben ik er niet meer mee te stoppen. Okay... je kan je afvragen of het ten alle tijden MySQL zal vervangen, maar ik ben in korte tijd echt Fan geworden van Mongodb. Maar de overstap van MySQL Queries naar Aggregate functions is wel even wennen. Voor één van mijn sites [nopnop.nl](http://nopnop.nl) ben nogal aan het stuntelen geweest met de queries (wat aggregation heet). En er is ook nog niet heel veel over te vinden, dus dacht ik laat ik het eens delen met mijn medemens. 

### MongoDB

MongoDB is een opensource document-georiënteerde database en is geschreven in C++. Er is geen schema, de documenten worden in de vorm van BSON (binair JSON) opgeslagen en de structuur van deze documenten is flexibel. De database kan gemakkelijk gedistribueerd worden, de data wordt dan over meerdere computers verspreid om gedistribueerde gegevensverwerking mogelijk te maken. MongoDB is geen relationeel databasemanagementsysteem, er is geen ondersteuning voor joins en voldoet ook niet aan de ACID-regels want de ondersteuning voor transacties is beperkt. MongoDB wordt gerekend tot de zogenaamde NoSQL-databases. [Wikipedia](http://nl.wikipedia.org/wiki/MongoDB)

### Aggregation

Om met php en MongoDB goede queries te bouwen kan je het beste met Aggregation de querie bouwen. Je bouwt dan doormiddel van array's je query op en zo kan je diverse zaken met elkaar koppelen. Zo kan je $match, $and, $or, $sort en $group met elkaar op wat voor manier met elkaar gebruiken. In de hoofdstukken hier onder laat ik je zien hoe je per onderdeel apart en gecombineerd de functions kan gebruiken. 

#### $match

Met $match kan je binnen je mongodb een (aggregate) selectie maken op 'veld'-niveau 

#### $match en $and

Maak een (aggregate) selectie op twee verschillende velden via $and 

#### $match en $or

De één of de ander via een (aggregate) selectie op twee verschillende velden via $or 

#### $match en $or en $and

Een (aggregate) selectie op 3 velden met $and en $or, dus een combinatie van twee velden of een ander veld. 

#### $match en $in

Maak een (aggregate) selectie op één veld met meerdere waarden. Dit doe je door gebruik van $in en een array met waarden 

#### Vergelijkingen maken met $gt $gte $lt $lte $ne

Er zijn via de aggregation (selectie) diverse manieren om vergelijkingen te maken. Je had al de $IN manier om te vergelijken met een array met waarden. Maar je hebt ook de volgende nog. 

    * $gt - groter
 
    * $gte - groter of gelijk
 
    * $lt - kleiner
 
    * $lte - kleiner of gelijk
 
    * $ne - ongelijk aan
Hieronder een voorbeeld van een vergelijking met $gte En hier nog een vergelijking met $gte en $lte om een between de doen bij een datum Nou... ik zou zeggen voldoende voorbeelden moet je voorlopig wel weer even opweg helpen.. toch? Mocht je nog vragen hebben aarzel niet om contact met mij op te nemen! En kijk nog even op mijn site [nopnop.nl](http://www.nopnop.nl) voor de beste deals!