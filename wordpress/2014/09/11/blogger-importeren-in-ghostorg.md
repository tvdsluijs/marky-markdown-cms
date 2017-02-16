title: Blogger importeren in Ghost.org
link: http://vandersluijs.nl/blog/2014/09/blogger-importeren-in-ghostorg.html
author: tvdsluijs
description: 
post_id: 46
created: 2014/09/11 20:13:00
created_gmt: 2014/09/11 20:13:00
comment_status: open
post_name: blogger-importeren-in-ghostorg
status: publish
post_type: post

# Blogger importeren in Ghost.org

Het had nogal wat voeten in aarde, de overstap van blogger naar Ghost.  
  
Ik wilde niet meer wachten op Ghost 5.0 omdat het er naar uitzag dat dat nog wel even op zich liet wachten.  
  
Dan maar wat meer doen om een mijn blogger blog in Ghost te krijgen.   
  


## Viel tegen

  
  
Maar dat viel vies tegen.  
  
Met Blogger kan je vrij makkelijk een export maken van je blog, maar Ghost vreet alleen Json's! En blogger spuugt alleen XML uit. Nu kan ik zelf wel wat scriptjes schrijven om van XML naar JSON te komen, maar daar had ik geen tijd voor.  
  
Dus opzoek naar een andere oplossing. En dus vond ik op internet een converteer tool genaamd [blogger2ghost](http://blogger2ghost.com/)  
  
De bouwer zegt dat het vrij makkelijk is, maar er best nog fouten in kunnen zitten. De tool maakt connectie met je blog en download dan al je artikelen in JSON formaat.  
  
Handig! Maar in mijn geval werkte het niet. Dit doordat de plaatjes niet meekwamen. En daarnaast heeft Ghost een nogal niet handige manier van plaatjes importeren. (die is er namelijk niet)  
  
Okay, change of plans! Er is nog een allerlaatste manier om je blogger blog in Ghost te krijgen, maar dan heb je eigenlijk best wat werk!  
  


## Wordpress

  
  
Lang lang lang lang lang geleden (nou zo lang geleden ook weer niet) werkte ik in Wordpress. Prima platform, maar je bent dagelijks meer tijd kwijt aan het updaten van wordpress en alle plugins dan dat je tijd hebt om te bloggen.  
  
Maar dat is dus de oplossing om voor NU je Blogger blog in Worpress te krijgen.  
  
**Stap 1:**  
Maak een XML export van je Blogger blog.  
  
Als je je blog wilt exporteren, klik je gewoon op 'Blog exporteren' op het tabblad Instellingen | Overig .  
  
Klik daarna op de knop Blog exporteren. Je blog wordt opgeslagen als Blogger-exportbestand (.xml) dat je als back-up kunt bewaren op de harde schijf of kunt importeren naar een andere blog.   
  
_Overigens is deze stap niet persé nodig met de nieuwste versie van de Blogger import plugin van wordpress, maar een backup hebben is nooit weg._  
  
**Stap 2:**  
Installeer op een webserver een wordpress site.   
  
Heb je geen webserver gebruik dan Amazon AWS of in mijn geval [Digital Ocean](https://www.digitalocean.com/?refcode=38909179d2dc) . In niet meer dan 1 klik en 5 dollar (of gebruik de gratis 2 maanden variant) kan je Wordpress daar installeren. In hun [handleiding](https://www.digitalocean.com/community/articles/one-click-install-wordpress-on-ubuntu-13-10-with-digitalocean) is het prima omschreven.   
  
**Stap 3:** Importeer je Blogger export  
  
Ga naar Tools -> Import en klik op Blogger. Waarschijnlijk zegt wordpress dat ze de plugin moeten downloaden en installeren. Dat is een kwestie van Ok,Ok -> install en "Activate Plugin & Run Importer".  
  
Daarna moet je je via deze plugin authenticeren op je Blogger blog via "Authorize".  
  
En het importeren van je Blogger Blog kan beginnen.  
  
Artikelen, reacties alles komt mee op deze manier!  
  
**Stap 4:** Zet je plaatjes in een cloudomgeving  
  
Helaas heeft Ghost.org nog geen manier om je plaatjes te importeren... dus heb je een externe plek nodig om ze te hosten.  
  
Dit kan heel goed via een CDN op bijvoorbeeld S3 van Amazon. (heb ik zelf ook gedaan) Let wel dit brengt maandelijks extra kosten met zich mee. Het zal niet veel zijn, mits je geen miljoenen bezoekers per maand hebt. Maar het is wel iets om rekening mee te houden.  
  
Maak een bucket aan in S3 die de zelfde naam heeft als je blog, dus bijvoorbeeld : blog.wiebenikdan.nl of www.mijndomeinnaam.nl efin je snapt het wel.  
  
De URL naar de CDN zal dan iets worden van: blog.wiebenikdan.nl.s3-website-eu-west-1.amazonaws.com  
  
Je moet daarnaast de bucket openbaar maken en "Static Website Hosting" zetten op "Enable website hosting" verder hoef je daar niets in te vullen want het wordt toch een CDN en geen echte site.  
  
Je dient ook een gebruiker aan te maken onder S3 waarmee je de plaatjes kan uploaden. Dit doe je via de "Security Credentials" bij Users. Je maakt een nieuwe user aan met een voor jou duidelijke naam en vinkt aan "Generate an access key for each User".  
  
Daarna krijg je twee zogenaamde sleutels die je kopieert naar een notepad of tekst editor of evernote (deze gegevens heb je later nog nodig namelijk)  
  
Als je klikt op "Show User Security Credentials" krijg je een "Access Key ID" en een "Secret Access Key" te zien. Die zijn dus belangrijk.   
  
Ook heb je de mogelijkheid om de keys via een download-optie te krijgen. Ja joh... download maar voor de zekerheid.  
  
**stap 5:** CDN koppelen via w3 total cache aan je wordpress site  
  


  

  * Ga naar Plugins > Nieuwe plugin
  

  * Typ een zoekopdracht in "w3 total cache"
  

  * Klik bij de gewenste plugin op “Nu Installeren”
  

  * Als de installatie voltooid is klik je op “Activeren”
  

  * Klaar, de w3 total cache plugin is nu klaar voor gebruik
  
  
  
Hierna dien je de CDN te configureren en heb je de gegevens nodig die je had opgeslagen.   
  
Het is niet heel ingewikkeld maar best wat werk. Voor een zeer uitgebreide handleiding hierover ga je naar deze [link](http://jeffreifman.com/detailed-wordpress-guide-for-aws/activate-amazon-cloudfront/)  
  
Vergeet niet al je plaatjes en foto's met de knop "upload to CDN" op de S3 omgeving te zetten.  
  
**stap 6:** nee helaas we zijn er nog steeds niet.  
Installeer de Disqus plugin. Die heb je nodig om je reacties op te slaan. Hiervoor heb je een Disqus account nodig die kan je [hier](http://disqus.com/profile/signup/) aanmaken.  
  
Na installatie van Disqus ziet het systeem dat je reeds reacties hebt en zal je vragen om ze te importeren.  
  
**stap 7:** We zijn er bijna!  
  
Installeer de Wordpress [Ghost.org plugin](http://wordpress.org/plugins/ghost/faq/)  
  
Activeer de plugin.  
  
Nu de Ghost plugin volledig is geïnstalleerd en geactiveerd, zie je nu de optie onder tools -> "Export to Ghost". Zodra je op die pagina komt zie je een knop "Download Ghost File". Als je daarop klikt gaat de plugin je wordpress artikelen downloaden in 1 bestand. Dit is het bestand dat zal worden gebruikt om te importeren je berichten dus zorg ervoor dat je deze op een veilige plaats bewaard.  
  
**Stap 8:** Importeer het bestand in Ghost!  
  
Ga naar je Ghost site en typ achter de url /ghost/debug  
  
Hier kan je je gegenereerde Wordpress file importeren.  
  
Als je dat hebt gedaan zal je zien dat al je blogposts op je Ghost.org site staan.  
  
**N.B.**  
Ik ben zeker een uur of 2 a 3 bezig geweest met de gehele conversie. Ik hoop dat Ghost.org binnenkort een eenvoudigere manier heeft om Blogger sites te importeren.  
  
Ik heb ook het Disqus verhaal nog niet op de rit op <http://blog.vandersluijs.nl> misschien gebruik ik het wel helemaal niet en stap ik over op Google+ Comments, die ik hier ook gebruik.  
  
Ik hoop dat je iets aan mijn tutorial had. Ik heb niet alles tot op de punt uitgelegd, je zal een beetje technisch onderlegt moeten zijn en ik heb al gezien dat verschillende knopnamen in andere talen nogal afwijken.  
  
Ik hoop dat het je lukt met de import en wens je veel succes met je site!  
  
En laat hieronder nog even weten of het is gelukt en wat jou Ghost.org site nu is.