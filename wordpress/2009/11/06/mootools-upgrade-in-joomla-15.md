title: Mootools upgrade in Joomla 1.5
link: http://vandersluijs.nl/blog/2009/11/mootools-upgrade-in-joomla-15.html
author: tvdsluijs
description: 
post_id: 369
created: 2009/11/06 22:46:00
created_gmt: 2009/11/06 22:46:00
comment_status: open
post_name: mootools-upgrade-in-joomla-15
status: publish
post_type: post

# Mootools upgrade in Joomla 1.5

Met mootools kun je simpel moeilijke stukken javascript voor je website gebruiken. Je hebt allerlei soorten effecten, je kunt simpel door de DOM “wandelen”, je kunt makkelijk met ajax werken en je hebt erg veel handige functies voor elementen, arrays, functies en dergelijke.   
  
Je kunt mootools gaan gebruiken als je de beginselen van javascript onder de knie hebt en dynamische websites wil gaan maken.  
  
Joomla 1.5 gebruikt Mootools. Hiermee maken ze mooie website zaken mogelijk. Echter gebruikt Joomla 1.5 een redelijk oude versie van Mootools. Namelijk 1.11 terwijl 1.2.x al een tijd uit is.  
  
In deze handleiding laat ik zien hoe je Mootools kunt upgraden binnen Joomla naar versie 1.2  
  
De ontwikkelaars van Joomla! hebben besloten om Mootools 1.2 pas te gaan gebruiken in Joomla! 1.6.  
  
Dat is volgens mij echt veel te laat. De nieuwe versie van Mootools, 1.2.x, introduceert veel nieuwe functies en is gebouwd met een compleet opnieuw ontworpen code.  
  
Dwight Jack maakt bij het uitkomen van een nieuwe Joomla! of Mootools versie steeds een nieuwe upgrade package aan waarmee je jou joomla versie kan upgraden.  
  
Vereisten voor een upgrade waarbinnen deze valt zijn:  
Bijna volledige compatibiliteit met Mootools 1.11 om fouten te voorkomen Upgrade van Mootools Plugins waar mogelijk Geen of minimale Joomla core hacks Implementatie van Mootools in legacy (1.0.x) componenten   
  
Makkelijke upgrade, volg de volgende stappen Allereerst downloaden we de nieuwste versie van Mootools Core en Mootools More (1.2.1): Mootools 1.2.1 Full (28.51 KB)  
  
Pak het archief uit en plaats de twee bestanden in media/system/js/   
  
Download dit compatibiliteit bestand MooTools 1.11 to 1.2.x (72.88 KB), waardoor de oude 1.11 scripts soepeler werken met de nieuwe mootools, en plaats deze in dezelfde map als hierboven.  
  
Klaar !  
  
Dat was makkelijk hé ! Maar we zijn er nog niet !  
  
Plugins Upgrade. één van de mees nuttige plugins geleverd met Mootools is Squeezebox, deze wordt gebruikt voor de modale vensters, hier (Sqeezebox for Mootools 1.2.x (3.37 KB)) is de 1.2 compatibele versie, klaar om te worden geplaatst in deze map : media/system/js/.  
  
Dus weer even uitpakken en uploaden naar media/system/js/.  
  
Aanpassen PhP code Natuurlijk wil je de Joomla Core files zo min mogelijk aanpassen om dit werkend te krijgen. Dus hierbij wat truckjes om mootools 1.2 te kunnen gebruiken in de Joomla! 1.5 frontend via de template.  
  
Joomla is gebaseerd op verschillende PHP bibliotheken die geplaatst in de libraries/ map, één van hen is de Joomla API, maar we vinden daar ook de ezSQL (een database lib), PHPMailer (een mailing systeem) en phpgacl (een lijst toegangssysteem). Om te kunnen profiteren van Joomla’s built-in bibliotheken systeem en op hetzelfde moment te voorkomen dat deze worden overschreven door de toekomstige releases, moet je een map aanmaken genaamd my_libs in de map libraries/ met daarin volgende classe bestand: my_behavior class for Joomla 1.5.9 (1.13 KB)  
  
In principe voorziet de klasse een functie die op zoek gaat naar Mootools en deze vervangt met de 1.2 versie die we zojuist hebben geupload.  
  
Als Mootools niet wordt gevonden, dan is het is het reeds geladen, en wordt deze uitgebreid.  
  
Je kan deze nieuwe class aanroepen vanuit de index.php met de volgende regels  
  
  
  
Als je om wat voor reden dan ook terug moet naar de oude mootools gebruik dan deze regel  
  
MY_Behavior::mootoolsFix(false);  
  
LET OP Test deze upgrade eerst op een kopie van je site. In basis Joomla! versies zou dit moeten werken echter zou het kunnen zijn dat bepaalde componenten, plugins, extensies en modules niet meer juist werken. Probeer deze upgrade dus nooit op een live site !  
  
Tot nu toe heb ik ervaren dat Virtuemart zijn eigen logica gebruikt en eigen bibliotheken heeft, dus het is standaard uitgesloten van de nieuwe MooTools versie.  
  
Optioneel kunt je specifieke onderdelen uitschakelen voor gebruik van de nieuwe mootools door het aanleggen van een array met hun waarde als tweede argument:  
  
MY_Behavior::mootoolsFix(true,array(“com_sobi2”,”com_comprofiler”));  
  
In SOBI2 wordt een foutmelding gegeven op het zoek formulier, tenzij u het register optie use_own_mootools op 0 zet.  
  
En en en Kijk voor de laatste versie altijd even op Dwight Jack zijn site.  
  
Met speciale dank aan :  
  
Dwight Jack   
Gebruik Mootools 1.2 in Joomla 1.5   
Upgrade Mootools naar 1.2 in Joomla 1.5