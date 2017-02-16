title: KPN Mobiel internet via Ubuntu / Kubuntu via Dongel
link: http://vandersluijs.nl/blog/2008/12/kpn-mobiel-internet-via-ubuntu-kubuntu.html
author: tvdsluijs
description: 
post_id: 468
created: 2008/12/03 20:09:00
created_gmt: 2008/12/03 20:09:00
comment_status: open
post_name: kpn-mobiel-internet-via-ubuntu-kubuntu
status: publish
post_type: post

# KPN Mobiel internet via Ubuntu / Kubuntu via Dongel

Gisteren heb ik eens Kubuntu ipv Ubuntu op mijn Laptop geïnstalleerd. Kubuntu ziet er erg goed uit en op mijn laptop draait het dan ook erg goed. Omdat ik veel met de trein reis wil ik natuurlijk ook wel internet hebben. Mijn KPN Mobiel internet werkt onder XP erg goed... maar dacht ik... zou het ook draaien onder Linux of in mijn geval Ubuntu /  Kubuntu ?  
  
  
  
Ik ben dit gaan uitzoeken en kwam door diverse sites tot een oplossing. Hieronder vind je de oplossing om je KPN Mobiel internet kaart 820 (Huawei E870 KPN) op het net te krijgen. Deze korte uitleg werkt wellicht ook voor andere kaarten of dongels.  
  
  
Start Ubuntu of Kubuntu op je laptop en steek de 820 (of andere) kaart in je express of pcmcia slot.  
  
Maak alvast een verbinding aan via de netwerk manager. De gegevens staan standaard goed (dat wil zeggen ik heb niets aangepast) zet in de pin code je pincode en hij mag van mij connecten op alle snelheden. Voor de rest :  
Number staat bij mij op *99#   
Networktype op ANY   
Band op 0  
Baud rate op 115200  
Data bits op 8  
Parity op None  
Stop bits op 1  
Send delay op 0  
  
  
Okay open een terminal en type de volgende twee regels (waar 0000 staat je eigen pincode en na iedere regel geef je een enter.)  
  
echo "ATZ^M" > /dev/ttyUSB0  
echo "AT+CPIN=0000^M" > /dev/ttyUSB0  
  
(De ^M doe je dmv CTRL+V op de prompt en dan Enter )  
  
Okay sluit de terminal.  
  
Ga nu naar je netwerkmanager en maak de verbinding. (is soms ALT+F2 voor nodig) maar bij mij werkte direct verbinden prima.  
  
Klaar en Internetten maar !!