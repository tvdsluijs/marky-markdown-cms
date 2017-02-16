title: Ghost en de "oplossingen"
link: http://vandersluijs.nl/blog/2014/09/ghost-en-de.html
author: tvdsluijs
description: 
post_id: 38
created: 2014/09/11 20:25:00
created_gmt: 2014/09/11 20:25:00
comment_status: open
post_name: ghost-en-de
status: publish
post_type: post

# Ghost en de "oplossingen"

Sinds de paar dagen dat ik Ghost gebruik wordt ik met de dag enthousiaster en enthousiaster. Het is eenvoudig, het is snel en het is clean.  
  
Maar zoals ik in een eerdere blog post al melde zijn er nogal wat tekortkomingen, tekortkomingen die overigens wel door het Ghost team opgelost gaan worden, maar tot dan komen hier de   
  


## Oplossingen!

  
  


  

  1. Geen sitemap!   
  
Gelukkig hebben we wel RSS in Ghost! En dat kunnen we gewoon gebruiken in Google webmaster tools!
  

  2. Geen Analytics   
  
Ja.... hiervoor moet je dus wel even een template file **default.hbs** openen met een text editor. Als je het zelf host dan moet je dit even met FTP (of via nano op linux) aanpassen.   
  
Als je het laat hosten bij Ghost.org dan moet je even de theme downloaden van <https://github.com/TryGhost/Casper> en daarna de theme weer zippen en oploaden via ghost.   
  
Voor de </head> moet je je analytics code zetten en klaar!
  

  3. Geen Webmaster tools   
  
Fijn... tegenwoordig zit dit aan analytics gekoppeld dus dat hoeft niet meer!
  

  4. rel = author   
  
Hiervoor moet je weer **default.hbs** aanpassen. Ook voor de </head> moet je de volgende regel zetten : <link href="https://plus.google.com/+hierjounaamofgooglenummer" rel="author" />   
  
Je kan ook nog in **post.hbs** ergens onder aan voor de eind van {{/post}} de volgende regel zetten <a href="https://plus.google.com/+hierjounaamofgooglenummer?rel=author">by JouNaam </a>
  

  5. Comments / reacties / Commentaar   
  
Deze is ook veel simpeler dan dat ik dacht! Onder </footer> plaats je de volgende code 
  
  
  
Zo zie je dat het aanpassen van Ghost eigenlijk heel simpel is.  
  
Maar je moet het wel willen doen, helaas werkt dit dus nog niet via een simpel configuratie bestand of zo.  
  
_Met dank aan:_  
  


  

  * [BiosElemental](http://bioselemental.com/ghost-adding-google-comments/)
  

  * [carstengrimm](https://ghost.org/carstengrimm/)