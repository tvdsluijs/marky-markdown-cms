title: Functies in een development team
link: http://vandersluijs.nl/blog/2015/09/functies-in-een-development-team.html
author: tvdsluijs
description: 
post_id: 1474
created: 2015/09/28 17:43:22
created_gmt: 2015/09/28 17:43:22
comment_status: open
post_name: functies-in-een-development-team
status: publish
post_type: post

# Functies in een development team

Vaak krijg ik de vraag waaruit ik denk dat een ontwikkel team behoort te bestaan. Nu kan dit natuurlijk per bedrijf anders zijn en zeker wanneer je kijkt naar wat ze willen ontwikkelen, maar als ik kijk naar puur de sector waarin ik me vaak begeef, web-development, blijven er maar 2 vragen over. Heb je een grote of kleine organisatie? En wil je het echt zelf intern gaan doen? Dit artikel gaat over hoeveel personen je nodig hebt binnen een development team, uit welke functies een development team bestaat en vooral waarom je welke functies binnen het team nodig hebt.

## **Hoeveel personen in een team**

Uit hoeveel man moet een team bestaan? Als je kijkt naar SCRUM dan staat er al snel 7 á 8 man. Maar waaruit moet de groep dan bestaan? Alleen developers? En kan het ook niet met minder man? Tuurlijk, het ligt er geheel aan wat je gaat ontwikkelen. Als je bijvoorbeeld een eigen API aan het ontwikkelen bent dan zal daar waarschijnlijk weinig front-end aan te pas komen. Je weet wie de gebruikers zijn (collega's) en een dedicated front-end developer is dan misschien nogal een overkill voor binnen dat team. Echter kan je in mijn visie bijvoorbeeld een goede tester nooit missen binnen een team. Misschien moeten het er zelfs wel twee zijn. Ééntje voor front-end (als je een frontend hebt) en ééntje voor backend. Daarnaast heb je natuurlijk de developers zelf nodig en wellicht door de complexiteit van je servers ook een Dev/Ops die de taal verstaat van de ontwikkelaars en van de systeembeheerder. Natuurlijk kan je nagelang de grootte van de projecten en teams één tester en één dev/ops op meerdere teams zetten (max 2). Maar als je een team gaat opbouwen moet je je wel afvragen of een eigen development team wel bij de organisatie past. 

## **Kleine organisatie**

Bij een kleine organisatie moet je je ten eerste afvragen of het hebben van een eigen development team wel financieel te onderbouwen is. Zoals je hier boven kan lezen ben je naast 1 of 2 developers ook al 3 personen rijker aan een Front-ender, een Tester en een Dev/Ops. Vaak zie je in kleinere organisaties dat een team heel klein opgezet wordt waarbij de developer meerdere functies te gelijk doet. Toch is dit niet altijd even handig maar daar over later meer in dit artikel. Als je toch te klein blijkt te zijn, kan je de werkzaamheden misschien beter uitbesteden aan een extern bureau. Wanneer het werk zo veel blijkt te worden dat een eigen team toch handiger is kan je altijd nog een eigen development team opbouwen. 

## **Grote organisatie**

Bij een grote organisatie (of een snel groeiende kleine organisatie) is het vaak snel te zien dat je beter een eigen development team kan opzetten, mits je natuurlijk intern wil ontwikkelen. Zorg er dan voor dat je het direct goed inricht qua team en de bemanning op de juiste functies hebt zitten, zodat niet de mensen aan iets zitten te werken wat ze eigenlijk niet goed onder de knie hebben. Wanneer het product of project waaraan je werkt heel groot is, is het wellicht verstandig om het project op te delen in kleinere sub-projecten. Zo kan je bijvoorbeeld een grote webshop opdelen in een categorieën project, een product pagina project en een checkout project en voor ieder een apart  team op zetten. Ik ken bedrijven die tussen de 15 en 20 scrum development teams hebben die op dit soort projecten zitten. Ieder team heeft daarin 3 tot 5 developers, een front-end designer/developer en een tester. Over max twee teams heen (nagelang de drukte) hebben ze dan één Dev/Ops en één Product Owner. 

## **Juiste persoon voor de juiste functie**

Binnen het team dient ieder persoon op de juiste functie te zitten en is het dus zeer ongewenst om personen taken te laten doen waar ze eigenlijk niet genoeg verstand van hebben. Ik zie binnen veel bedrijven dat er niet specifiek een front-end developer is aangesteld (laat staan aangenomen) om de frontend taken te doen. Dit kan een backend developer toch wel doen? Als ik uitleg waarom je dit niet moet doen begrijpen veel managers dit niet. Dus leg ik het ze daarna simpel uit. 

> _Ik heb zelf wel eens bij één van mijn eerste auto's, zo'n 20 jaar geleden, zelf de olie en het filter vervangen. Om de kosten binnen dit bedrijf te drukken, ga ik dit ook bij alle lease-auto's doen. Ja ook bij de Landrover, Jaguar of Maserati waarin de directeur rijdt. Ik heb niet zo heel veel ervaring, maar ik denk dat het me in de komende 6 maanden (in sprints van 2 weken) wel moet lukken. Wat vindt je van dit voorstel?_

De managers waaraan ik dit vertel, kunnen en zullen 2 dingen denken. Ben jij niet een beetje duur om olie te gaan vervangen? En, een filter vervangen bij een Jaquar of Maserati? Dat lijkt me werk voor een specialist of in ieder geval door iemand die dit dagelijks doet! 

> Klopt!

Ik denk dat ik het best zou kunnen, maar als je zo iets 20 jaar voor het laatst of niet al te vaak hebt gedaan en niet eens weet waar je het moet zoeken bij sommige auto's, zou dan niet het zelfde gelden voor een front-end functie? 

## Front-end Functie

De afgelopen jaren is front-end development er niet makkelijker op geworden. In 1996 zette ik zo een HTML pagina in elkaar, maar tegenwoordig moet je met  zo veel zaken rekening houden dat het echt heel specialistisch werk is geworden.  Denk bijvoorbeeld aan de verschillende resoluties waaraan het moet voldoen, mobile, tablet, desktop. Welke jquery / jquery-ui versie en wanneer dit moet worden ingeladen om een zo goed mogelijke pagespeed score. Maar ook: moet ik  Sprites gebruiken, HTML5, CSS3,  Sass of Less, javascript minification en ga zo nog maar even door. Een backend developer kan dit misschien wel een beetje, maar bij lange na niet zo goed en snel als een echte front-end developer. 

## Dev/Ops Functie

Zelfde met een Dev/Ops functie. Tuurlijk kan een developer een leuke server in elkaar zetten en installeren en configureren. Maar houdt de developer rekening met alle veiligheidsaspecten? Hoeveel geheugen PHP moet krijgen en hoeveel MySQL. Hoe is de toegang geregeld? Caching-servers, php versie's, apache of nginx, mysql / mariadb of percona, het  zijn allemaal nogal specialistmen waar een developer wel iets van af weet maar bij lange na niet genoeg. Daarnaast richt een Dev/Ops development omgevingen in (met bijvoorbeeld vagrant) en onderhoud hij deze. Ook zal hij nieuwe technieken proberen en wanneer deze veelbelovend zijn binnen een project zal hij ze overdragen aan de developers waarna deze het kunnen gaan gebruiken. Denk daarbij aan in plaats van MySQL de overstap te maken naar MariaDB of Percona. Ik zeg overigens niet dat een Dev/Ops de systeembeheerder moet vervangen, maar nu zie ik nog te veel developers servers inrichten alsof het om hun eigen werkstation gaat. 

## Tester Functie

En dan als laatste de tester! Testen moet je niet laten doen door een Developer. Natuurlijk zal een collega developer een team-check doen op de code maar functioneel gezien dient een tester dit te doen. Een tester zal ook (al of niet samen met de Dev/Ops) een ontwikkelstraat uitwerken en daar bij de diverse test punten (unit tests, integration tests en Web Browser Automation tests) inbouwen of er in ieder geval op toezien dat de developer hier rekening mee houdt en ze ook daadwerkelijk maakt. 

## **Toch de developer laten doen**

Als je het stuk hier boven hebt gelezen en je bent nog steeds van mening dat je de backend developer ook de functie van een front-end developer, Dev/Ops en tester moet laten doen realiseer je dan het volgende: 

  * Het zal veel meer tijd kosten (en dus geld);
  * Het zal nooit zo goed zijn als wanneer je dit de juiste persoon dit laat doet;
  * Het zal achteraf nog meer tijd kosten omdat je meer problemen zal ondervinden.
Dus wil je een goed team, zorg dan dat je de juiste mensen op de juiste plek hebt zitten! Het kost een beetje, maar je zal er heel veel profijt van hebben! En vergeet niet! De tijd die een developer niet hoeft te werken aan de font-end kan hij in de backend stoppen.