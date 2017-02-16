title: Internet Explorer 7 Startpagina verwijderen
link: http://vandersluijs.nl/blog/2008/06/internet-explorer-7-startpagina.html
author: tvdsluijs
description: 
post_id: 509
created: 2008/06/23 21:02:00
created_gmt: 2008/06/23 21:02:00
comment_status: open
post_name: internet-explorer-7-startpagina
status: publish
post_type: post

# Internet Explorer 7 Startpagina verwijderen

Heb jij dat ook….  
  
  
Net IE7 (Internet Explorer 7) geïnstalleerd… en niet van die eerste pagina af kunnen komen.  
  
Je weet wel die “Thanks for choosing Internet Explorer 7” / “Bedankt dat u voor Interet Explorer 7 kiest” pagina.  
  
  
Wat je ook probeert…… die pagina blijft, en het mooiste van alles is, je wilt wel op die knoppen in die pagina klikken, maar je komt er niet doorheen.  
  
  
  
In deze zogenaamde RunOnce pagina  
“<http://runonce.msn.com/runonce2.aspx”> zit een javascript dat op  
sommige pc’s niet goed wil werken.   
  
  
Vraag me niet wat het probleem is, maar het is een probleem waar ik lang mee zat en niet kon oplossen.  
  
Tot ik op 2 pagina’s eindelijk de oplossing voor dit vervelende probleem vond.  
  
  
En nee je kan het helaas niet oplossen via Interet Explorer 7.  
  
  
Maak een tekst bestandje (bestandsnaam.reg) en zet dit er in:  
  
  
Windows Registry Editor Version 5.00  
  
  
[HKEY_CURRENT_USERSoftwareMicrosoftInternet ExplorerMain]  
  
“RunOnceComplete”=dword:00000001  
  
“RunOnceHasShown”=dword:00000001  
  
Dubbel klik er op, en klik op OK.  
  
Done !   
  
Bron:  
<http://www.msfn.org/board/how-to-disable-the-annoying-http-runo-t75475.html>   
  
en  
<http://it.megocollector.com/?p=56>