title: MMS Blog Importer 1.x naar 2.x
link: http://vandersluijs.nl/blog/2008/07/mms-blog-importer-1x-naar-2x.html
author: tvdsluijs
description: 
post_id: 503
created: 2008/07/14 15:44:00
created_gmt: 2008/07/14 15:44:00
comment_status: open
post_name: mms-blog-importer-1x-naar-2x
status: publish
post_type: post

# MMS Blog Importer 1.x naar 2.x

Sinds kort van Joomla! 1.0.x naar Joomla! 1.5 overgestapt ?  
  
En je gebruikte in Joomla! 1.0.x het MMS component ?  
Dan heb je het zelfde probleem als ik heb. Er is geen mogelijkheid tot importeren van oude MMS data in je nieuwe database.  
  
Nou… geen mogelijkheid ? Tot nu dan. Want ik heb een php oplossing hiervoor geschreven waarmee je je MMS berichten toch kan exporteren en importeren.  
  
Wil je weten hoe ? Lees dan verder.  
  
Ik had al in het forum van va de ontwikkelaar aangegeven dat hij het niet kon maken dat er geen importfunctionaliteit was. Maar ja, daar is niets mee gedaan. Dus vond ik het tijd worden om zelf iets te maken.  
  
Dit is geen out of the box oplossing.  
Maar als je de stappen volgt dan moet het lukken.  
Je hebt overigens wel wat kennis nodig van MySQL.  
  
PROBEER HET IS OP EEN TEST OMGEVING !!!! NOOIT OP EEN LIVE SITE !!!  
  
Ook werkt dit niet met zekerheid om andere bestande dan jpeg files oftwel foto’s  
Ik heb niet veel andere media naar mijn Joomla omgeving ge-mms-ed dus bij mij waren er alleen foto’s om over te zetten.  
  
Zorg dat je minimaal 1 MMS-je in je nieuwe systeem hebt staan. Je hebt namenlijk wat gegevens nodig voor het configureren van deze exporteer tool.  
  
Let op: dit werkt alleen op een Joomla 1.0.x (op 1.0.15 getest) installatie.  
  
Wat heb je nodig:  
Een Werkende webserver met mysql server  
\- Joomla Files  
\- Backup van oude dbase (of in ieder geval de MMS tabellen van het oude MMS component)  
\- de zip met mijn files  
\- de directory met foto’s  
  
Er hoeft geen complete installatie van joomla te zijn.  
Een directory met alle files op een webserver en je backup van je oude Joomla omgeving (of minimaal de tabellen van het oude mms component is voldoende.  
  
Je config file moet wel juist zijn, en dan met name het deel van de dbase connectie.  
  
Stap 1.  
Zorg dat je ten alle tijde een goede backup hebt van je oude joomla omgeving, of je nieuwe joomla omgeving met hierin de MMS tabellen van het oude MMS component.  
  
Stap 2.  
Zet de uitgepakte zip in de root (je hoeft je geen zorgen te maken over de structuur) gewoon inclusief folders in de root zetten.  
  
Stap 3.   
Open in root/mmsblog/ de file confi.php in een tekst editor.  
  
Stap 4.  
Open je browser en surf naar <http://plek>_waar_de_site_staat/mmsblog  
  
LET OP: er vind nu gelijk verwerking plaats.  
Niet je browser afsluiten ander kan je de foto’s niet meer hernoemen.  
  
Stap 5.  
Open phpmyadmin of een andere tool om je MySQL dbase mee aan te passen.  
Heb je al een backup gemaakt van de data van je Joomla 1.5 ?  
  
Stap 6.  
Open de dbase van je oude Joomla 1.0.x site .  
Exporteer de jos_mmsblog_item en jos_mmsblog_media.  
Deze twee tabellen zijn nu gevuld met de informatie die je voor het nieuwe MMS component nodig hebt.  
  
Stap 7.  
Open de dbase van je nieuwe Joomla 1.5 site   
Heb je al een backup gemaakt van de data van je Joomla 1.5 ?  
Importeer de SQL file die je hierboven geexporteerd hebt.  
  
Stap 8.  
Open een dosbox => Start => RUN => type : cmd enter  
Ga naar de folder waar je plaatjes staan.  
  
Stap 9.  
Kopieeer de tekst uit je browser tussen   
========================START RENAME=============================  
en  
========================STOP RENAME=============================  
(er tussen, dus deze bovenstaande regels niet mee nemen)  
  
  
Stap 10.  
Open notepad.  
Plak de tekst in een nieuw leeg scherm van notepad.  
  
Stap 11.   
Loop de tekst even na. 99% van het hernoemen gaat goed,  
maar soms zitten er vreemde regels tussen.  
Verwijder deze regels.  
  
(bijv:   
Goede regels  
RENAME 22.jpg 00029_00032.jpg   
RENAME mmsblog_00196_01.JPG 00104_00105.jpg   
  
FOUTE REGEL  
RENAME 44.jpgimgend Mijn nieuwe werkplek. 2 schermen, 3 00049_00050., 3   
RENAME 52.jpgimgend imgstart53.jpg Afbee001.jpgimgstart54.jpg Afbee001.jpgimgstarteen BBQ  
  
  
STAP 12.  
Kopieeer de aangepast test uit notepad.  
  
  
Stap 13.  
Plak dit in de dos box.  
Nu worden alle plaatjes hernoemt naar de juiste MMS benaming.  
  
Zet de plaatjes in de juiste Joomla! 1.5 omgeving   
(op mijn server staan ze in /root/images/mmsblog).  
  
DONE !  
  
{docs}mmsblog{/docs}