title: Verwijderen MSN 4.7
link: http://vandersluijs.nl/blog/2008/07/verwijderen-msn-47.html
author: tvdsluijs
description: 
post_id: 502
created: 2008/07/16 21:17:00
created_gmt: 2008/07/16 21:17:00
comment_status: open
post_name: verwijderen-msn-47
status: publish
post_type: post

# Verwijderen MSN 4.7

Gek werd ik er van.  
Bij een herinstallatie van windows XP (wat overigens nog steeds mijn favoriet is boven Windows Vista), krijg je er gelijk het geweldige MSN Messenger 4.7 mee op je PC.  
  
En als je een nieuwere MSN versie op je PC zet dan...... 3x raden..... juist verwijderd hij niet de oude MSN versie.  
  
Er is wel een manier om de oude 4.7 MSN versie te verwijderen, maar die moest ik dus steeds op internet opzoeken.  
  
  
  
Nu dus niet meer.  
  
Ik zet het nu maar op mijn Blog zodat ik het hier altijd kan terug vinden.  
  
Overigens zocht ik in Google altijd op : Uninstall MSN 4.7 start run  
  
Wellicht denk je, hum.... wat een rare zoek woorden ..... start ... run ???  
  
Nou, ik weet me altijd wel te herinneren dat je de volgende stappen moet doen.  
  
   
  
1\. Klik op Start in windows (je weet wel, links in je windows balk)  
  
2\. Klik op Run of voor den Hollanders Uitvoeren  
  
3\. Zet de volgende regel er in, en klik op OK of Enter  
  
   
  
RunDll32 advpack.dll,LaunchINFSection %windir%infmsmsgs.inf,BLC.Remove  
  
   
  
Boven staande regel verwijderd dus inderdaad je MSN 4.7 versie.  
  
Succes !