title: Om naar Joomla! 1.5
link: http://vandersluijs.nl/blog/2008/06/om-naar-joomla-15.html
author: tvdsluijs
description: 
post_id: 508
created: 2008/06/27 05:00:00
created_gmt: 2008/06/27 05:00:00
comment_status: open
post_name: om-naar-joomla-15
status: publish
post_type: post

# Om naar Joomla! 1.5

Sinds vandaag draait mijn site op Joomla! 1.5.3  
  
Eigenlijk was ik nog niet van plan om over te stappen naar 1.5.3. Ik wilde dat wel maar nog niet alle componenten enz. die ik wilde gebruiken waren geschikt voor Joomla! 1.5.  
  
Tuurlijk zijn ze waarschijnlijk in Legacy mode wel te gebruiken, maar dat wil ik niet. Als je om gaat naar een nieuw systeem dan moet je geen oude troep gebruiken.  
  
Al met al gaf het nogal wat problemen om de site om te zetten.  
  
Ten eerste de migratie.  
Met de migratie tool van Pasamio gaat de migratie best wel goed. Ik heb de volgende stappen gedaan.  
  
Eerst het aller aller belangrijkste, maak een goede backup van je “oude” joomla! site.  
Installeer (als je dat nog niet gedaan hebt de migratie tool downloaden en installeren)  
Je exporteert eerst alle oude data van je oude joomla! site naar een bestand.  
Maak een nieuwe dbase aan op je server  
Maak een subdirectory aan waarin je joomla 1.5 in zet /root/newsite ofzo.  
Ga via de browser naar je subsite (<http://www.jousite.nl/newsite>  
Doe de joomla! 1.5 installatie  
Op een gegegen moment kan tijdens de installatie je kiezen om de dbase te vullen met demo data of om je migratie bestand te gebruiken, doe het laatste.  
Rond de installatie af.  
Zet de images directory / folder over van je “oude” site naar de subdirectory (anders zie je geen plaatjes in je artikelen.  
Klaar  
Nou ja klaar ……. Je content is over. Let wel…. deze migratie is alleen Joomla! specifiek, Dus al je extra geinstalleerde componenten die ook data bevatten zijn hiermee niet over.  
  
Nieuwe template.   
Ik was met mijn oude template erg tevreden op Joomla 1.0.x maar ja die ging natuurlijk niet meer werken op Joomla! 1.5 (ja wel in legacy mode maar dat wilde ik niet)  
  
Dus moest ik op zoek naar een nieuwe template. Nu zijn er heel veel Joomla! template sites, maar als op zoek bent kan je het beste naar deze site gaan. Op de Best of Joomla! site kan je namelijk heel uitgebreid zoeken op templates, zo ook op “Compatibility” oftewel met welke joomla! versie werkt deze.  
  
Hier heb ik een mooie template gevonden en deze aangepast tot dat deze voldeed aan mijn eigen verwachtingen. Aardig gelukt al zeg ik het zelf.  
  
Op zoek naar Componenten.  
Op mijn “oude” site gebruikte ik de volgende componenten.  
  
flickr4j : om mijn flickr foto gallerijen te tonen  
  
JCE Editor: de beste editor onder Joomla!  
  
Joomap : voor site maps en google xml  
  
MMS Blog : om foto’s via mms op mijn site te zetten  
  
mXcomment : het toelaten van reacties op artikelen  
  
sh404SEF : voor betere URL’s waarmee google en andere zoekmachines iets kunnen  
Weblinks in Columns : betere en nettere manier voor het tonen van weblinks  
  
Gelukkig waren er voor 3 van de 7 componenten een 1.5 versie te vinden.  
  
(JCE, nog in beta maar goed. MMS Blog, sh404SEF ook beta maar werkt)  
  
Voor Flickr4j, Joomap, MxComent en Weblinks in Columns zijn nog geen 1.5 versie’s te krijgen  
  
Weblinks in Columns  
Van Weblinks in Columns de ontwikkelaar, dus daar ga ik binnenkort mee aan de slag.  
  
Flickr4j   
Flickr4j wordt niet omgebouwd naar Joomla! 1.5, althans niet binnen korte termijn.  
  
Hiervoor heb ik nu Joomla! Flickr gekozen, een Joomla! 1.5 component. Deze werkte alleen helaas niet voor mij out of the box. Ten eerste werkte het niet samen met sh404SEF, zie ook mijn forum posts met oplossing. En daarnaast vond ik de lightbox effecten mijn site zo traag maken dat ik dit heb aangepast met de lightbox effecten die al in mijn eigen template verwerkt zaten. Binnenkort publiseer ik even mijn aangepaste versie van Joomla! Flickr hier op mijn site want de ontwikkelaar van Joomla! Flickr zelf is niet echt snel met het verwerken van deze zaken.  
  
Joomap  
Ik vond op zich Joomap wel heel goed werken, en er komt vast een 1.5 versie van echter staat de ontwikkeling daarvan redelijk stil. Ik heb dus gekozen om XMap hiervoor in de plaats te gaan gebruiken. Die had ik al ingebruik op wat andere sites (Joomla! 1.0.x sites) en was hier ook tevreden over.  
  
MxComent  
Een goede Comment tool is niet makkelijk te vinden. Er zijn er veel en ieder comment tool heeft zijn voor en tegens. Tot ik Jom Comment tegen kwam. Nou niet helemaal eerlijk… hij zat standaard bij de template die ik had gekozen als uitgangs punt. Het is de Jom Comment Tool van Arzul. Bij deze tool liep ik alleen tegen een klein probleempje op…. hij kan geen MXComment data importeren… althans nog niet. Ik heb aangegeven Beta tester te worden omdat ze bij Arzul dit in een nieuwe versie wel willen gaan verwerken. Op dit moment kan Jom Comment al wel diverse andere comment component data importeren… alleen nog niet van MX Comment… helaas.  
  
Opschonen   
  
Helaas heb ik mijn eigen migratie traject nog niet kunnen toepassen dus ben ik als een gek aan het opschonen. Er zijn artikelen die niet meer relevant zijn en plaatjes die missen…. veel werk dus. Maar daar ga ik de komende weken aan werken…. hopelijk lukt het me om dit goed op te schonen.  
  
Andere kleine zaken   
Flex Applicaties  
Ik moest bij het omzetten ook rekening houden met ander kleine probleempjes. Zo connecteren mijn Flex Applicatie’s via de “oude” Joomla Core naar mijn dbase. Dat werkt dus niet meer. Dat zal ik binnenkort dus nog moeten aanpassen.  
  
Google Webmaster Tools  
In de google webmaster tools staat een link naar mijn Google XML. Die haalt dus steeds alle links en artikelen van mijn site. Handig… maar ja die link is met in gebruikname van XMap dus niet meer geldig. Moest ik dus ook aanpassen.  
  
Online zetten.   
  
En last but not least…. moest ik de site online zetten. Oftewel, nog een keer een backup van oude en nieuwe site. Oude site verwijderen. Nieuwe site in de root plaatsen. Cross your fingers…….. en ja hoor …. het werkt !