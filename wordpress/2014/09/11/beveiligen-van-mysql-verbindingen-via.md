title: Beveiligen van MySQL verbindingen via een SSH tunnel
link: http://vandersluijs.nl/blog/2014/09/beveiligen-van-mysql-verbindingen-via.html
author: tvdsluijs
description: 
post_id: 45
created: 2014/09/11 20:16:00
created_gmt: 2014/09/11 20:16:00
comment_status: open
post_name: beveiligen-van-mysql-verbindingen-via
status: publish
post_type: post

# Beveiligen van MySQL verbindingen via een SSH tunnel

Dus je hebt een mysql database met klant gegevens er in? Dan zorg je natuurlijk als eerste dat alleen de website er bij kan door het toelaten van alleen het ip adres van de webserver!  
  
Zo kan nooit een externe partij direct toegang krijgen tot je mysql database. Maar als je er nu zelf op wilt, geef je dan je eigen thuis/bedrijfs- ip adres ook toegang? Of doe je het echt veilig en gebruik je een ssh tunnel naar de webserver en laat je die contact maken met de database server!  
  


## Veiligheid boven alles

  
  
Ik ga er even vanuit dat je niet met je kop op tweakers.net wilt en het zo goed als onmogelijk maken (of eigenlijk geheel onmogelijk maken) dat kwaadwillenden toegang kunnen krijgen tot je database.  
  
Dit kan je doen door bijvoorbeeld alleen je webserver (het via het interne netwerk adres) toegang te geven.  
  
Dit is heel erg veilig maar als je dat doet heb je wel gelijk een ander probleem, want dan kan je er zelf direct niet meer bij.  
  
Dit is op te lossen door een connectie te leggen naar de webserver, die hierna een connectie maakt met de mysql server.   
  
Waarschijnlijk gebruik je naar grote tevredenheid, het programma HeidiSQL (of vergelijkbaar) om MySQL databases te beheren.  
  
Daarme kan je makkelijk connecties kan leggen naar de webserer maar dan is het zo dat verkeer over de MySQL poort 3306 niet encrypted is. Gebruikersnamen en wachtwoorden gaan onversleuteld over het netwerk en internet.   
  
De oplossing is dus het gebruik van een SSH tunnel.   
  
HeidiSQL biedt zelf ondersteuning voor een tunnel, dus je hoeft niet zelf met putty aan de slag. Wel is plink.exe (onderdeel van Putty) benodigd.  
  


## Hoe stel je dan zo'n tunnel in?

  
  
In plaats van een "gewone" MySQL TCP/IP verbinding kies je voor MySQL (SSH Tunnel) bij Network type.  
  
![ssh tunnel HeidiSQL](/content/images/2014/Sep/1.png)  
  
**Tabblad settings**  
  
Hostname / IP is dan je eigen werkstation, dus localhost of 127.0.0.1.  
  
Gebruikersnaam en wachtwoord zijn de MySQL gegevens van de database waarmee je connect.   
  
Port laat je staan op 3306  
  
**Tabblad SSH tunnel**  
![ssh tunnel HeidiSQL plink](/content/images/2014/Sep/2.png)  
  
Stel het pad in naar plink.exe (onderdeel van Putty wanneer je de normale setup heb gedaan)  
  


## Sequel Pro op een Mac

  
  
Op een mac kan je ipv HeidiSQL gebruik maken van Sequel Pro.  
  
Hierbij heb je geen Plink.exe nodig.  
  
Normaal stel je een connectie las volgt in:   
  
![sequelpro ssh](/content/images/2014/Sep/3.png)  
  
Maar voor een SSH tunnel stel je bij de mysql host je eigen ip adres in (die van je mac oftewel 127.0.0.1), en bij de SSH gegevens geef je het ip adres in van je webserver. (your all set!)   
  
![sequel pro ssh](/content/images/2014/Sep/4.png)  
  
In beide gevallen (zowel windows als mac) gebruik je de webserver als zogenaamde Jump server. Je moet dus nog wel even deze jump server zo instellen dat je daarop weer een ssh tunnel hebt naar de mysql server.