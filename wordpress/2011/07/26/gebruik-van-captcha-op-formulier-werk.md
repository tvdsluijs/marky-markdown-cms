title: Gebruik van Captcha op formulier werkt niet.
link: http://vandersluijs.nl/blog/2011/07/gebruik-van-captcha-op-formulier-werk.html
author: tvdsluijs
description: 
post_id: 230
created: 2011/07/26 22:38:00
created_gmt: 2011/07/26 22:38:00
comment_status: open
post_name: gebruik-van-captcha-op-formulier-werk
status: publish
post_type: post

# Gebruik van Captcha op formulier werkt niet.

Eigenlijk wilde ik dit artikel eerst noemen, de zin en onzin van Captcha's. Maar eigenlijk is het puur onzin om Captcha's te gebruiken op je formulieren.  
  
  
  
Voor de personen die geen idee hebben wat Captcha's zijn:  


> Een captcha (een afkorting van "completely automated public Turing-test to tell computers and humans apart") is een reactietest die in de gegevensverwerking wordt gebruikt om te bepalen of er al dan niet sprake is van een menselijke gebruiker.

  
Oftewel het zijn die irritante kleine overtyp controles om te kijken of je wel echt mens bent.  
  
Op mijn werk hadden we veel last van Spam berichten op diverse formulieren. Er stond een Captcha bij maar die was niet echt heel moeilijk ofzo.  
  
Ik dacht, die bouw ik om naar re-Captcha (tegenwoordig van Google) en zal de spam stroom eens stoppen.  
  
Dat ging totaal 1 uur goed. 1 uur lang kregen we geen spam binnen. En daarna... weer net zoveel als er voor.  
  
Hoe kan dat, dacht ik. En ging dus opzoek naar het hoe en waarom over Captcha's.  
  
Wat blijkt! Captcha's hebben hun langste tijd gehad. Het is puur jezelf voor de gek houden als je denkt dat Captcha's werken.  
  
Tuurlijk op sites die minimaal bezoek hebben werken Captcha's prima. Spam bedrijven hebben namelijk geen interesse in dit soort websites. Nee het gaat ze om grote goed bezochte websites en om websites die een hoge Pagerank hebben, zoals mijn eigen <http://www.iamboredsoiblog.eu> site.  
  
Maar de vraag is natuurlijk, hoe omzeilen ze de Captcha's. Ik weet dat ze met zogenaamde Spam (spider) Robots werken om formulieren te vullen. Maar kunnen die Robots ook Captcha's lezen.  
  
Het antwoord daarop is zowel JA als Nee. In basis kunnen die Robots dit niet. Echter met de huidige OCR technologie is het redelijk makkelijk om sommige Captcha's uit te lezen.  
  
OCR is een technologie die verschillende types documenten, zoals gescande papieren documenten, om te zetten in een digitale te bewerken versie.  
  
Maar dan heb je nog steeds een groot deel van de Captcha's die niet uitgelezen kunnen worden. Dus hoe omzeilen ze dat?  
  
Daarvoor hebben ze diverse slimme menselijke manieren voor bedacht. Zo zijn er bijvoorbeeld grote bedrijven in China die door 2 dollar zo'n 1000 Captcha's voor je kraken. Ze hebben daar ruimtes vol met mensen die de hele dag niets anders doen dan Captcha's over typen.  
  
Ook zijn er diverse porno sites gratis te benaderen als je eerst, je snapt het al, een Captcha intypt. Een Captcha die heel slim van een andere door een Spam Bot in te vullen formulier komt.  
  
Al met al zijn Captcha’s dus eenvoudig te kraken en lost het jou spam probleem niet op.  
  
Maar is er dan echt geen manier om die vervelende spambots tegen te gaan?  
  
Ja die is er… er zijn er zelfs meerdere.  
  
Ten eerste kan je [PHP form obfuscator](https://github.com/Codingrecipes/PHPFormObfuscator) gebruiken. Wat je hiermee doet is eigenlijk alle veldnamen een rare andere code als naam geven (dus geen naam, email, commentaar / maar 39DJDO, HE8090JS, S23894JJ). Bij het versturen van het formulier worden deze namen weer goed gezet en zo weet een spambot nooit wat welke naam is.  
  
Het is vrij simpel in te bouwen. Zie [deze site](http://codingrecipes.com/a-php-form-obfuscator-secure-and-spam-free-php-forms) voor een voorbeeld.  
  
Daarnaast moet je zoveel mogelijk javascript code gebruiken.  
  
Gebruik javascript code om een veld te bouwen, gebruik javascript code om het formulier te versturen, gebruik javascript code om velden te valideren, gebruik javascript code om de action van het formulier mee te vullen.  
  
99% van de spambots weet niet goed hoe met javascript om te gaan. Wat ze doen is een formulier opvragen en direct de velden in vullen. Daar wordt geen javascript bij verwerkt.  
  
Als je dan een veld met javascript opbouwd dan ziet de spambot op het formulier geen veld. En die kan hij dus ook niet invullen.  
  
Wat je ook nog kan doen is velden op je formulier zetten die verborgen zijn door CSS (display:none;) en geef ze dan een naam waarop een spambot zou kunnen zoeken. Zoals email. Een normale bezoeker ziet dit veld niet en zal hem ook niet invullen.  
  
Echter een spambot ziet niet dat het veld verborgen is en denkt….. hé… een email veld… snel invullen met een nep adres.  
  
Jij vangt natuurlijk netjes af dat wanneer dit veld gevuld is jij het formulier niet verder verwerkt. Let op: er kunnen  en mogen geen 2 velden met de zelfde naam in voorkomen, anders gaat deze laatste tip niet op.  
  
Mocht je wat code voorbeelden willen zien. Laat het me weten.  
  
Oh ja en nog één ding!  
  
Veel mensen vinden Captcha’s ondingen. Met deze tips kan je de Captcha op jou formulier weg laten. Hier doe je veel mensen een groooooot plezier mee !