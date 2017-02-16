title: Server Rechten voor Joomla!
link: http://vandersluijs.nl/blog/2008/08/server-rechten-voor-joomla.html
author: tvdsluijs
description: 
post_id: 498
created: 2008/08/19 21:35:00
created_gmt: 2008/08/19 21:35:00
comment_status: open
post_name: server-rechten-voor-joomla
status: publish
post_type: post

# Server Rechten voor Joomla!

Veel gebruikers van Joomla! hebben op hun server de rechten van bestanden en mappen verkeerd staan.  
  
Hierdoor kunnen deze joomla! (maar ook overige php sites) sites makkelijk gehackt worden.  
  
Geloof me, het is mij ook gebeurd.  
  
Ik ben eens gaan uitzoeken wat nu de beste manier is om je site oftewel server het beste te beveiligen tegen hackers.  
  
Overigens met onderstaande instellingen zeg ik niet dat het nooit meer mogelijk zal zijn om gehackt te worden, want een server on-hackbaar maken kan maar op 1 manier. En dat is niet verbinding, op welke manier dan ook met een netwerk en internet. (maar ja... .dat gaat een beetje moeilijk als je je site op internet wilt laten zien)  
  
  
  
De volgende instellingen gelden zowel voor Joomla! 1.0.x als voor Joomla! 1.5  
  
Het zetten van de juiste rechten doe je overigens met een ftp programma of met [chmod](http://www.htmlwijzer.nl/artikel/chmod.php)  
  
   


  
  


  

Soort
  

Rechten
  
  


  

Alle php bestenden
  

644
  
  


  

configuration.php
  

646
  
  


  

administrator/components/
  

707
  
  


  

administrator/modules/
  

707
  
  


  

administrator/templates/
  

707
  
  


  

cache/
  

707
  
  


  

components/
  

707
  
  


  

images/
  

707
  
  


  

images/banners/
  

707
  
  


  

images/stories/
  

707
  
  


  

language/
  

707
  
  


  

mambots/
  

707
  
  


  

mambots/content/
  

707
  
  


  

mambots/editor/
  

707
  
  


  

mambots/search/
  

707
  
  


  

mambots/systeem/
  

707
  
  


  

media/
  

707
  
  


  

modules/
  

707
  
  


  

templates/
  

707
  
  


  

Overige mappen
  

755
  
  


  

tmp (Joomla! 1.5)
  

707
  
  


  

 
  

 
  
  
  
  
Overigens is het nog veiliger om alles op niet schrijfbaar te zetten (dus 755) maar het moet ook wel een beetje werkbaar blijven natuurlijk.  
  
En... zorg dat je backups hebt !