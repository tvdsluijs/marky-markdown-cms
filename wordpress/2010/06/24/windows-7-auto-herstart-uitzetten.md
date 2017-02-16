title: Windows 7 Auto herstart uitzetten
link: http://vandersluijs.nl/blog/2010/06/windows-7-auto-herstart-uitzetten.html
author: tvdsluijs
description: 
post_id: 286
created: 2010/06/24 12:59:00
created_gmt: 2010/06/24 12:59:00
comment_status: open
post_name: windows-7-auto-herstart-uitzetten
status: publish
post_type: post

# Windows 7 Auto herstart uitzetten

Wat een hekel heb ik aan die automatische zaken in Microsoft Windows 7. Tuurlijk zal het een goede reden hebben dat Windows 7 bij iedere automatische update wil herstarten. Maar als mijn pc bezig is met iets belangrijks waarbij ik niet aanwezig ben, zoals het renderen van een film ofzo, dan wil ik niet dat hij even doodleuk automatisch gaat herstarten na de installatie van een update.  
  
Dus… heb jij ook een bloedje hekel aan zo’n automatische Windows 7 herstart na een update lees dan even verder.  
  
Okay… het is vrij eenvoudig om die automatische windows 7 herstart uit te zetten.  
  
Klik op de start knop in windows 7. Je weet wel dat is dat ronde windows 7 icoontje op je menu balk links onder in je scherm.  
  
  
  
Type het volgende onder in het invoer veld (het invoer veld is waar je “programa’s en bestanden zoeken” ziet staan) : “gpedit.msc” (zonder “ quotes)  
  
Nu opent het zogenaamde “Local Group Policy Editor” / “Editor voor lokaal groepsbeleid” zich.  
  
Ga in het linker deel op zoek naar   
  
Beleid voor lokale computer Computer configuratie Beheersjablonen Windows onderdelen Windows update   
  
In de rechter kant zoek je op   
  
“Niet automatisch opnieuw opstarten als gebruikers zijn aangemeld na geplande installaties van Automatische updates”  
  
Dubbelklik hierop. Je krijg nu het volgende scherm te zien  
  
Klik op “Ingeschakeld”.  
  
Klik op “OK”.  
  
Sluit het “Editor voor lokaal groepsbeleid” venster.  
  
Klaar !