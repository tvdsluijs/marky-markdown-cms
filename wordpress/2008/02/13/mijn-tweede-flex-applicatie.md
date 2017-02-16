title: Mijn tweede flex applicatie
link: http://vandersluijs.nl/blog/2008/02/mijn-tweede-flex-applicatie.html
author: tvdsluijs
description: 
post_id: 521
created: 2008/02/13 06:00:00
created_gmt: 2008/02/13 06:00:00
comment_status: open
post_name: mijn-tweede-flex-applicatie
status: publish
post_type: post

# Mijn tweede flex applicatie

Nou, ik heb zojuist een tweede Adobe Flex applicatie gemaakt.  
  
Okay … okay… ook deze Flex applicatie stelt nog niet heel veel voor, maar ja vergeet niet… het is een leer traject.  
  
Waarschijnlijk wordt het pas echt interessant als ik mijn 30e applicatie heb gemaakt. In ieder geval als ik PhP als Datakoppeling ga gebruiken.  
  
Maar goed ik wil ze graag met jullie delen en ik vind het nog leuk om te doen ook. Daarnaast zit ik er over te denken om een NL versie op te gaan zetten van een Flex User Group site. Op de Flex.org site staan diverse community groups, maar voor NL is er nog geen.  
  
Maar ja zou daar voldoende interesse in zijn….. hmmmmm….  
  
Als je interesse hebt mail me dan even.  
  
En dan nu, mijn tweede applicatie !  
  
  
Hoe het werkt ? Vul op de eerste regel wat tekst in, en klik daar na op “Click Me !!”  
  
Wow !!!!!!!!!!!! ;-)  
  
De code voor al dit geweldigs is:  
  
  
  
  
// Define an ActionScript function.  
private function duplicate():void {  
myText.text=”“;  
myText.text=myInput.text;  
}  
  
private function clearit():void {  
myInput.text=”“;  
}