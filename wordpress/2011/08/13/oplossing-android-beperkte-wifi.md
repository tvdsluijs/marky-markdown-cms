title: Oplossing Android beperkte Wifi Connectie / Netgear
link: http://vandersluijs.nl/blog/2011/08/oplossing-android-beperkte-wifi.html
author: tvdsluijs
description: 
post_id: 228
created: 2011/08/13 16:07:00
created_gmt: 2011/08/13 16:07:00
comment_status: open
post_name: oplossing-android-beperkte-wifi
status: publish
post_type: post

# Oplossing Android beperkte Wifi Connectie / Netgear

Netgear…. ik ben er niet blij mee. Ik dacht, weet je wat laat ik eens een goede Router met Wifi mogelijkheden kopen. Dus ik koos de duurste Netgear die er te koop was bij ZeelandNet toen ik overstapte van KPN ADSL naar Kabel internet van ZeelandNet.  
  
Nou…. Netgear is niks…hoe duur het ook is. Zo heb ik vaak problemen met de Wifi op alle wifi apparaten in huis. Zo dus ook met mijn Sony Ericsson Arc Android. Maar ik heb een oplossing!  
  
Netgear is niet echt gortig met updates… en bij deze dure Netgear WNR3500 (v1) is het niet anders. Je betaalt veel, maar de support achter af is ….SLECHT!  
  
Nee, mijn Vigor en Fritzbox die ik hiervoor beide versleten heb waren veel beter. Maar ja…. weet ik veel dat Netgear niks is…. zeker niet met Android 2.x versies.  
  
Dus toen ik zag dat er toch nog een nieuwere firmware was dan ik had (had liever dd-wrt geinstalleerd maar de chipset van deze Netgear wordt niet ondersteund) heb ik hem gelijk geïnstalleerd… dat zou toch wel alle problemen met WiFi oplossen……  
  
Helaas…. maar if it ain’t broken don’t fix it hadden ze in geval van Netgear beter kunnen noemen… if it is broken… don’t even try to fix it.  
  
Efin, mijn Dell Studio 17 wilde alleen nog maar zo nu en dan connectie leggen met mijn Netgear WNR 3500 en mijn Sony Android helemaal niet.  
  
Ik kreeg alleen maar “Limited Connectivity”, “beperte connectie” op mijn scherm te zien. Of te wel de laatste update maakte het van kwaad tot erger… en geloof me ik was kwaad.  
  
Dus ik ben op onderzoek uit gegaan…. alle instellingen van mijn Netgear nagelopen om te zien of er iets verkeerd stond bij wifi….maar daar kon ik niets vreemds ontdekken…. totdat ik bij de optie LAN keek.  
  
Daar stond bij RIP version : NONE !  
  
Even voor de goede orde, RIP is in de volksmond beter bekend als Rest In Peace (rust in vrede) en wordt dus vaak bij overledenen genoemd.  
  
RIP in de wereld van netwerken (in geval van Netgear nog steeds rust in vrede, want je doet niks) betekent dit het ROUTING INFORMATION PROTOCOL.   
  
RIP of Routing Information Protocol is een open netwerkprotocol waarmee routers aan elkaar doorgeven welke routes voorhanden zijn om IP-informatie naar zijn bestemming te sluizen. Het is een distance-vector routing protocol en gebruikt UDP voor transport van gegevens en het aantal tussenliggende routers (hops) als metriek.  
  
Blijkbaar is dit dus nodig om de juiste route tussen routers wordt aangegeven…. en laat dat nu juist de oplossing zijn voor mijn WiFi probleem !  
  
Zet deze instelling direct op : RIP_2B en al je Netgear Wifi Connectie problemen zijn verholpen !