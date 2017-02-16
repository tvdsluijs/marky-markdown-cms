title: Van MD5 schijnveiligheid naar veilige wachtwoord versleuteling.
link: http://vandersluijs.nl/blog/2014/01/van-md5-schijnveiligheid-naar-veilige.html
author: tvdsluijs
description: 
post_id: 76
created: 2014/01/17 09:02:00
created_gmt: 2014/01/17 09:02:00
comment_status: open
post_name: van-md5-schijnveiligheid-naar-veilige
status: publish
post_type: post

# Van MD5 schijnveiligheid naar veilige wachtwoord versleuteling.

![](/wp-content/uploads/2014/01/6101434856_e7eafdfdf2_m.jpg)

photo by [marc falardeau](http://www.flickr.com/photos/49889874@N05/)
Wellicht was je je er al van bewust.... of misschien komt dit wel als een hele grote schok.... maar wachtwoorden via MD5 versleutelen is **NIET** veilig!  
  
Ergers nog de meeste MD5 ge-encrypte wachtwoorden zijn gewoon te vinden op internet!  
  
Dus als je nog een website hebt waarbij gebruikers gegevens (en dan met name wachtwoorden) versleuteld worden, dan is het nu echt tijd om dit aan te passen naar een echt veilige wachtwoord versleuteling.  
  
Stel je hebt een site met, ik zeg maar wat, 50.000 leden. Stel de server waarop deze site draait wordt gehackt en de hackers neemt je database mee waarin alle versleutelde md5 wachtwoorden staan.  
  
7 van de 10 internet gebruikers gebruikt dat wachtwoord waarschijnlijk ook voor andere sites. Dus met het email adres en het MD5 wachtwoord zou je theoretisch op wellicht een tiental sites kunnen inloggen. Mits je natuurlijk het echte wachtwoord weet.  
  
Voor zo'n 2000 euro kan je een klein super-computer-cluster met [CUDA](http://www.nvidia.com/object/cuda_home_new.html) in elkaar zetten waarmee je zo'n 700.000.000 per seconde kan kraken!!!!!  
  
Maar dat is helemaal niet nodig! Want de meeste MD5 wachtwoorden zijn gewoon op internet te vinden!  
  
Hieronder een door mij willekeurig (echt ik heb het eerste wat in mijn hoofd kwam gebruikt) wachtwoord omgezet naar een MD5 wachtwoord.  
  
6f3c06ddd4c4d17dcbf3201026f6bcad  
  
Ik zou zeggen, [google](https://www.google.nl/search?q=6f3c06ddd4c4d17dcbf3201026f6bcad&oq=6f3c06ddd4c4d17dcbf3201026f6bcad&aqs=chrome..69i57.378j0j4&sourceid=chrome&espv=210&es_sm=119&ie=UTF-8) er even op!  
  
En weet je al wat het is? Geloof me, zo goed als alle wachtwoorden kan je vinden op internet!  
  
Nog 1, en hierbij heb ik voor één letter een cijfer gebruikt  
  
b586c7911751d07fefe8269aa9bb051c  
  
is het te vinden op [Google](https://www.google.nl/search?q=d209ac71d68631e9441a1cbc00d8d099&oq=d209ac71d68631e9441a1cbc00d8d099&aqs=chrome..69i57.355j0j4&sourceid=chrome&espv=210&es_sm=119&ie=UTF-8#es_sm=119&espv=210&q=b586c7911751d07fefe8269aa9bb051c&safe=active)? Ja!  
  
Nu is het zo dat we afgelopen jaar ook nog wat legacy code hadden die gebruik maakte van MD5 versleuteling. En ik wist dat het moest maar toen ik een brief van Adobe kreeg waarin stond dat ze gehackt waren en dat waarschijnlijk mijn wachtwoord door hackers gebruikt kon worden, wist ik dat er iets moest gebeuren!  
  
Dus heb ik in een aantal stappen een gehele aanpassing gedaan op alle wachtwoorden om dit veiliger te maken. In een volgend blog artikel zal ik uitleggen (stap voor stap) hoe je dit kan doen.  
  
Je kan natuurlijk md5 met een salt (achtervoegsel) gaan gebruiken maar ook dat is niet veilig genoeg meer tegenwoordig.  
  
Sowieso moet je wel altijd een salt gebruiken die random is gegenereerd (en het er daarna via bijvoorbeeld : "dubbelepunt" er achter te plakken) als je via MD5 of een SHA wilt versleutelen.  
  
Maar als je een beetje veilige manier van opslaan van wachtwoorden wilt gaan doen dan moet het minimaal sha256 en beter nog sha512 gaan gebruiken. Het beste is bcrypt, maar voor nu mits je gebruikers ook langere wachtwoorden gebruiken is SHA512 afdoende.  
  
Dus heb je nog een website waarbij de wachtwoorden MD5 versleuteld zijn? Dan is nu echt de tijd aangebroken dat je dit moet aanpassen!  
  
Geloof me, je wilt echt niet met bedrijfsnaam op [Tweakers](http://tweakers.net/nieuws/88290/hackers-ontvreemden-wachtwoorden-scribd-gebruikers.html) ([artikel ](http://tweakers.net/nieuws/92697/miljoenen-plaintext-wachtwoorden-van-datingsites-liggen-op-straat.html)2, [artikel ](http://tweakers.net/nieuws/92397/gestolen-wachtwoorden-adobe-gebruikers-waren-niet-gehasht.html)3, [artikel ](http://tweakers.net/nieuws/82411/wachtwoorden-miljoenen-linkedin-gebruikers-op-straat.html)4) staan om daar huilend te vertellen dat alle wachtwoorden van je klanten bestand op straat ligt doordat je gehackt bent en nog MD5 gebruikt!