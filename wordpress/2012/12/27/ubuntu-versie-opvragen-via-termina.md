title: Ubuntu versie opvragen via terminal
link: http://vandersluijs.nl/blog/2012/12/ubuntu-versie-opvragen-via-termina.html
author: tvdsluijs
description: 
post_id: 141
created: 2012/12/27 16:08:00
created_gmt: 2012/12/27 16:08:00
comment_status: open
post_name: ubuntu-versie-opvragen-via-termina
status: publish
post_type: post

# Ubuntu versie opvragen via terminal

Stel je installeert Ubuntu en je hebt net zoals mij nogal wat problemen met de installatie, dan ga je op zoek naar een antwoord op internet zodat je de installatie kan afronden. Maar wat als ze daar vragen om wat voor Ubuntu versie het gaat?  
  
En erger nog, wat als je dat niet weet en GNOME of KDE of Unity krijg je niet gestart. Hoe zie je dan welke versie je hebt?  
  
Eigenlijk is dat redelijk makkelijk op te vragen.  
Sinds Ubuntu 6 heb ik een soort van Haat Liefde verhouding met dit OS. Aan de ene kant vind ik het prachtig dat zo iets is ontstaan vanuit de open source gedachte, maar aan de andere kant krijg ik het niet voor elkaar om al mijn dagelijkse dingen er mee te doen.  
  
Ik heb bijna alle versies van Ubuntu (vanaf versie 6) wel voorbij zien komen en steeds probeer ik het weer, maar als snel kom ik er achter dat ik gewoon niet er mee kan doen wat ik er mee wil.  
  
Tuurlijk voor de doorsnee internettende, telebankierende, beetje Open Office gebruikende gebruiker is het perfect.  
  
Maar voor mij helaas niet, en tot dat grote partijen zoals een Adobe hun software geschikt gaan maken voor Linux zal bij mij de overstap ook niet gaan gebeuren.  
  
Tuurlijk heb je Wine, maar zelfs een simpel programma als Evernote draait gewoon niet goed onder wine.  
  
Maar waarom heb ik nu dan dit probleem? Ah, ja dat komt omdat de "oude" laptop van mijn kids (waarop ze diverse tekenfilms enzo kijken) op Ubuntu draait! En ik dacht, kom laat ik hem eens upgraden!  
  
Helaas zit er in die laptop een Pentium M, die dus geen PAE ondersteund en ik kan dus vanaf versie 12.0x geen ubuntu meer op dat ding gebruiken. Maar dat is een heel ander probleem.  
  
Het probleem waar ik van de week dus tegen aanliep is dat Unity niet meer wilde opstarten en ik dus de precieze versie van Ubuntu moest weten... ja iets met versie 11.xxxxxx ... geen idee.  
  
Gelukkig bracht Internet en met name Google uitkomst.  
  
Type het volgende in de terminal in :  


> cat /etc/lsb-release

  
Dan krijg je iets te zien zoals :  
  


> DISTRIB_ID=UbuntuDISTRIB_RELEASE=11.10DISTRIB_CODENAME=Oneiric OcelotDISTRIB_DESCRIPTION="Ubuntu 11.10"

  
Ik zelf dacht dus de hele tijd dat ik 11.04 aan het gebruiken was en daar gingen sommige dingen dus net weer even anders.