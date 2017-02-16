title: MySQL Query caching, niet zaligmakend
link: http://vandersluijs.nl/blog/2012/12/mysql-query-caching-niet-zaligmakend.html
author: tvdsluijs
description: 
post_id: 143
created: 2012/12/06 22:28:00
created_gmt: 2012/12/06 22:28:00
comment_status: open
post_name: mysql-query-caching-niet-zaligmakend
status: publish
post_type: post

# MySQL Query caching, niet zaligmakend

![](/wp-content/uploads/2012/12/mysql_query_cache.jpg)

MySQL query caching, het lijkt de "best thing to do" als je je site of applicatie wilt optimaliseren voor veel gebruikers.  
  
Caching "onthoudt" namelijk veel gebruikte queries en kan die dus zonder heel de database door te moeten zonder problemen snel serveren aan de site of de applicatie.  
  
Zeker als je een grote database hebt is Caching iets wat je moet doen om je site of app snel te houden.  
  
Toch?  
Bij mij heeft het in ieder geval veel developers bezig gehouden.  
  
MySQL caching! Zonder goede queries werkt het niet!  
  
Zo hebben de volgende queries als je gebruik wilt maken van caching weinig zin.  
  
1\. Select(_) is slecht cachebaar omdat mysql eigenlijk geen vaste volgorde van velden heeft. Dus als je een select doet (maakt verder niet uit wat voor, met en zonder joins) zet de velden er in! Zo kan MySQL deze goed cachen.  
  
2\. Ook het opvragen van een SELECT met RANDOM() heeft weinig zin als je caching goed wilt gebruiken. Met random weet MySQL niet wat hij moet cachen, of beter gezegd hij cached elke keer het laatste resultaat, en met de volgende Random() moet hij dat weer cachen omdat de uitkomst steeds anders is. In dit geval kan je beter de hele uitkomst binnen MySQL houden via de select en daarna met PHP (of jou programmeer taal) random in de MySQL uitkomst (op de MySQL server zelf) gaan prikken en de  data over halen.  
  
3\. Selects met een WHERE op een timestamp? Of met NOW() is ook niet te cachen door MySQL. Elke keer doet hij dan een where met een andere groot getal (aantal seconden). Dus iedere keer als de pagina bezocht wordt van je site, of in je applicatie zal hij een voor MySQL geheel nieuwe query uitvoeren zonder dat hij de cache daarvoor gebruikt. Beter kan je kijken of je die query niet afgerond op bijvoorbeeld 5 minuten, 30 minuten, 1 uur, 1 dag, 1 maand of zelf een jaar kan laten zoeken binnen je database. Dan kan MySQL namelijk wel de query goed cachen en hergebruiken.  
  
4\. Select count(_) is nog zo'n voorbeeld wat niet gecached zal worden door MySQL, gebruik liever Select count(id) of ander veld zodat MySQL dit prima kan hergebruiken.  
  
5\. Het updaten van een tabel zal de caching van de query elke keer resetten, dus iets bij houden als een page visit of een product visit bij de grote tabel zal je caching geen goed doen. Daarvoor (dus bijvoorbeeld van het bijhouden van page visits kan je het beste op een extra aparte tabel doen.)  
  
Natuurlijk is het buiten de te gebruiken cache ook belangrijk dat je goede indexen hebt op de velden waarmee je de database doorzoekt of waarmee je de verschillende tabellen joined.  
  
Maar goed, is caching nu wel handig om te doen? In veel gevallen waarschijnlijk wel, echter als je een site op applicatie hebt die heel veel updates/deletes/inserts en daarbij selects doet is het misschien helemaal goed om caching te gebruiken.  
  
Mijn development teams en ik hebben veel tijd en effort gestoken in het optimaliseren van alle queries en de PHP code maar we bleven problemen houden met de MySQL server. Locks en high threads, we waren eigenlijk ten einde raad. Tot we er achter kwamen dat de caching de locks veroorzaakte en onze webhosting partij de caching van de mysql server uitzette.  
  
Bij een website of applicatie met een normaal aantal bezoekers of gebruikers is het heel handig om zo goed en veel mogelijk caching te gebruiken. De veel dezelfde queries zullen de applicatie of de site met caching snel laten reageren.  
  
Maar op een site of applicatie met zo'n miljoen bezoekers / gebruikers per maand en met daarbij heel veel updates/deletes/inserts en selects kan caching juist het tegen gestelde veroorzaken.  
  
Caching lockt de query cache heel even, en zodra het heel druk is zal er dus een rij komen te staan voor de query caching. En dan gaat het heel snel. Je krijgt te maken met database locks en hogere en hogere threads (oftewel connections) en op een gegeven moment zijn je connecties op (je kan bij een mysql server instellen hoeveel connecties de server kan hebben) en dan krijg je database connectie fouten op het scherm.  
  
In zo'n geval is het beter om alle queries te optimaliseren en om caching uit te zetten. Natuurlijk zijn er daarnaast nog andere en betere manieren om de database te ontzien.  
  
Met zo'n 1.200.000 bezoekers waarvan 500.000 unieke bezoekers die totaal 9.100.000 pagina's bekijken werkt de bax-shop.nl web-shop op een server met max 200 connecties nu vlekkeloos en soepel.