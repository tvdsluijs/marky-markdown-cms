title: Plaats je Blog foto's buiten je site via Amazon S3, Cloudfront of Flickr
link: http://vandersluijs.nl/blog/2015/02/plaats-je-blog-fotos-buiten-je-site-via.html
author: tvdsluijs
description: 
post_id: 2709
created: 2015/02/18 20:58:00
created_gmt: 2015/02/18 20:58:00
comment_status: open
post_name: plaats-je-blog-fotos-buiten-je-site-via
status: publish
post_type: post

# Plaats je Blog foto's buiten je site via Amazon S3, Cloudfront of Flickr

Wordpress, Blogger, Ghost.org, Tumblr, SquareSpace, het zijn stuk voor stuk prima sites waar je je blog kan plaatsen. Je kan met sommige op je eigen server een blog beginnen maar ze bieden ook allemaal de optie om het bij hun in de cloud te doen. Hoe dan ook, services genoeg om je site / blog te starten! Maar pas op met plaatjes en foto's!! Ik heb al heel wat blogs gehad. Dat wil zeggen ik heb bij verschillende partijen en met verschillende systemen. Ik heb eerst mijn eigen CMS geschreven, daarna ben ik over gestapt op Joomla!, ik ging naar Wordpress toen naar mijn eigen installatie van Wordpress, naar Blogger, daarna naar Tumblr, weer terug naar Blogger, naar Wordpress, naar Blogger, naar Ghost.org en weer terug naar Blogger. Niet alleen leerde me dit dat mijn Ranking naar zijn knoppen ging omdat ik nooit de juiste URL's naar mijn blogposts terug kreeg en Google me dus ieder keer opnieuw helemaal opnieuw moest indexeren en er dus veel te veel 404's op mijn site waren. Maar daar gaat deze Blog-Post niet over. Elke keer als ik mijn site "verplaatste" raakte ik ook veel of zo niet al mijn plaatjes en foto's kwijt. Zo niet ook de laatste keer weer van Ghost.org naar Blogger. Probleem is dat veel blog services zoals Wordpress.com, Blogger, Ghost, Tumblr enz zetten plaatjes en foto's op hun eigen cloud servers en als je geen import tool hebt om die plaatjes en foto's mee te nemen naar je eigen blog.... well.... you're fucked! Geen plaatjes, Geen foto's.... Blog Posts zonder images..... Heb ik nu dus ook. Maar dat kan anders! Als je het nu goed oppakt, maakt het nooit meer uit waar je je blog heen verhuist! Je moet namelijk je plaatjes op een aparte cloud omgeving zetten. Alles kan, Amazon S3 of Amazon Cloudfront of zoals ik nu doe via Flickr! Voordeel is dus dat je Blog posts weet dat de plaatjes dus van Amazon of Flickr moeten komen en niet van Ghost / Blogger of Tumblr. En zodra je verhuist dan weet de nieuwe omgeving ook waar de plaatjes vandaan moeten komen. Als je het echt goed wil doen, zet je plaatjes dan op Amazon S3, koppel Amazon Cloudfront er aan en zorg dat je een eigen subdomein (bijv: images.jouwdomein.nl) via een CNAME aan cloudfront koppelt. Dan haal je je altijd je plaatjes en foto's via je "eigen domein" op een goede en altijd werkende manier op of je nu verhuist naar Blogger, Ghost of Tumblr. 

**_Ik hou van koffie... dus als je bovenstaande handig vond doneer dan._**

**_ Rechts boven in staan mijn doneer knoppen!_**