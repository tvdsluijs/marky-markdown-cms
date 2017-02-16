title: ZeelandNet wifi-modem in voor gebruik met een eigen router?
link: http://vandersluijs.nl/blog/2015/05/zeelandnet-wifi-modem-gebruik-eigen-router.html
author: tvdsluijs
description: 
post_id: 4
created: 2015/05/21 20:55:15
created_gmt: 2015/05/21 20:55:15
comment_status: open
post_name: zeelandnet-wifi-modem-gebruik-eigen-router
status: publish
post_type: post

# ZeelandNet wifi-modem in voor gebruik met een eigen router?

Zolang ZeelandNet Bridge Mode nog niet mogelijk gemaakt heeft in het Wifi Modem, is IP Pass Through voor de eigen router in het Wifi Modem (EPC3925) een redelijk alternatief.

Gebruik onderstaande werkwijze voor het aansluiten van de eigen router op het zeelandnet modem:

  * Zorg dat het Macadress van de eigen router bekend is.
  * Ga via 192.168.11.1 naar het Wifi Modem. Log in met inlognaam en password.

![zeelandnet modem eigen router](http://zeelandwifi.nl/wp-content/uploads/2016/05/b0ebfd1d-7ac4-4e52-9c9c-2fe24f74d9e8-300x150.jpg)

  * Vul het Macadress van de eigen router in onder Applications & Gaming bij IP Pass Through.
  * Schakel de SPI Firewall uit in het Wifi Modem als je verder geen gebruik maakt van het Wifi Modem
  * Herstart het Wifi-Modem
  * In de eigen router staat DHCP AAN, stellen we beveiliging in en regelen Wlan (zoals bekend). Mocht het een Sitecom zijn, is het verstandig de Security Cloud uit te zetten.
  * Sluit nu de voeding van de router aan en de netwerkkabel tussen een Lanpoort ( op Wifi-Modem) naar Wanpoort ( losse poort op router).
  * Herstart de pc.
  * Hardware kan zowel op de router gebruikt worden via Wireless en Lan als op het het Wifi-Modem. Let op dat als je via Wifi of Lan van het modem verbindt dat dit een ''ander'' netwerk is!
  * Wel zal je, als je het Wifi-Modem wilt benaderen, dit voortaan rechtstreeks moeten doen (niet via hardware welke van de router gebruik maakt).