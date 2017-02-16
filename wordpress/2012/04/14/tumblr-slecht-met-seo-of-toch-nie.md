title: Tumblr slecht met SEO, of toch niet?
link: http://vandersluijs.nl/blog/2012/04/tumblr-slecht-met-seo-of-toch-nie.html
author: tvdsluijs
description: 
post_id: 203
created: 2012/04/14 23:09:00
created_gmt: 2012/04/14 23:09:00
comment_status: open
post_name: tumblr-slecht-met-seo-of-toch-nie
status: publish
post_type: post

# Tumblr slecht met SEO, of toch niet?

Tumblr beweert te zijn geoptimaliseerd voor google en tevens ook voor andere zoekmachines zoekmachine vriendelijk te zijn. Maar dat is niet helemaal waar. Tumblr is zoekmachine vriendelijk, maar het is niet zo goed geoptimaliseerd als ze beweren. Het is eigenlijk wel prima zoals tumblr het doet maar als je een blog op tumblr hebt en je wilt echt het onderste uit de kan hebben dan zal je zelf nog wat aanpassingen moeten doen aan uw thema zodat het nog beter vindbaar is voor google en andere zoekmachines. Tumblr is geweldig, maar als je het goed voor elkaar wilt hebben lees dan onderstaande tips even door.  
  
Let op: de onderstaande tips kunnen per thema variëren:  
  
1\. Optimaliseer uw pagina titels  
Keer de titel volgorde om op individuele artikel pagina´s. Zodat de titel van het artikel als eerst getoond wordt en daarna de naam van de blog. Bijvoorbeeld : “SEO voor Tumblr | vandersluijs.nl” kan je als volgt voor elkaar krijgen:  
  
{block:SearchPage}, Zoekresultaten voor : {SearchQuery}{/block:SearchPage}{block:PostSummary}{PostSummary} | {/block:PostSummary}{Title}  
  
2\. Maak van je artikel titels h1’s  
Zoek het onderdeel {block:Text} en pas aan naar :  
  
{block:Title}{Title}{/block:Title}  
  
Waarschijnlijk dien je hierdoor ook nog de CSS aan te passen voor h1 (of hiervoor aanmaken), of kopieër gewoon de .title class.  
  
3\. Maak je artikel paginas permalinks naar het artikel zelf  
We hebben net de artikel titels h1’s gemaakt, en nu maak je deze {Title} een link die gaat naar de {Permalink} en dat doe je zo:  
  
{block:Title}{Title}{/block:Title}  
  
Dit is ook gebruikersvriendelijk, bij veel blogs zijn de titels linkjes naar het artikel. Je kan de CSS naar eigen inzicht hiervoor veranderen, bijvoorbeeld om een “hover” toe te voegen.  
  
4\. Maak eigen artikel URLs  
Deze is eenvoudig! Als je een artikel aanmaakt kan je een eigen URL aanmaken aan de rechter in opties. Tumblr zal automatisch de spaties en streepjes voor je aanmaken.  
  
5\. Gebruik meer headings in je artikel  
Ga in de HTML editor en gebruik in je artikel heading tags , . Heading tags moeten binnen het artikel natuurlijk wel ergens op slaan. De styl kan je aanpassen in de CSS.  
  
6\. Link naar je eigen blog in de footer  
Stop een link in de footer naar je eigen site, bijvoorbeeld±  
  
je blog naam  
  
*Eigenlijk hebben alle blogs dit in de footer staan. Het is uitgezocht door google en het blijkt dat mensen denken dat de site niet klaar is met laden als ze geen (copyrights in de) footer zien.  
  
7\. XML sitemaps  
Tumblr maakt een XML sitemap van je site op joublog.tumblr.com/sitemap1.xml  
  
Deze sitemap kan je gebruiken bij Google Webmaster Tools zodat Google je site kan onderzoeken en crawlen, en daarnaast kan je ook allerlei handige informatie zien in de webmaster tools zoals crawl fouten enz.  
  
8\. Voeg image alt tags toe  
Voeg de juiste omschrijvingen toe aan je plaatjes, bijvoorbeeld:   
  
Dit is tevens goed voor mensen met een visuele handicap.  
  
9\. Overweeg het maken van tekst posts ipv foto posts  
In tegenstelling tot de foto’s posts, hebben tekst-berichten “title tags” en “categorieën” en die zijn heel erg van belang. Echter is dit ook een kwestie van persoonlijke voorkeur, als je van de de foto’s een diashow wil maken met meerdere foto’s, en je vindt het ontbreken van de titel geen probleem dan gewoon doen. Maar als je je blog beter wilt optimaliseren dan zal je toch echt gebruik moeten maken van een tekst bericht.  
  
Hoe dan ook, de naam van uw foto’s dient u beschrijvend te maken met van koppeltekens of scheidingstekens (in plaats van onderstrepingstekens of niets) voor de woorden, bv “kaas-gehakt-pizza.jpg”.  
  
Met bovenstaande tips zou uw site beter vindbaar moeten worden in google. Maar let wel, geef het wat tijd.