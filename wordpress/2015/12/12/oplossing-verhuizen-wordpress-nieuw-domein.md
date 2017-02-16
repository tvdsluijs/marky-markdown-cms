title: Oplossing verhuizen Wordpress nieuw domein
link: http://vandersluijs.nl/blog/2015/12/oplossing-verhuizen-wordpress-nieuw-domein.html
author: tvdsluijs
description: 
post_id: 1995
created: 2015/12/12 06:00:32
created_gmt: 2015/12/12 06:00:32
comment_status: open
post_name: oplossing-verhuizen-wordpress-nieuw-domein
status: publish
post_type: post

# Oplossing verhuizen Wordpress nieuw domein

Het verhuizen van een Wordpress domein kan voor nogal wat kopzorgen zorgen. Probleem is namelijk dat Wordpress geen dynamische domein namen gebruikt maar gewoon harde. Zowel in configuratie als in je content. En als je dan je blog verplaatst dan werkt er in basis niets meer.

## Oplossing Wordpress naar nieuw domein

Ik weet niet waarom er ooit gekozen is voor een niet dynamische domein oplossing in Wordpress. Het staat er keihard in (in config en in database) en als je je wordpress site gaat verhuizen naar een ander domein heb je dus een uitdaging. Ik heb mijn site al een paar keer verhuist en loop steeds weer tegen het zelfde probleem aan. 

> Waarom doet mijn Wordpress site het niet

En de oplossing is eigenlijk heel simpel! Twee regeltjes aanpassen of toevoegen in wp-config.php   [infobox color="#f4f4f4" textcolor="#000000" icon="code"]   
define('WP_HOME','http://jou-nieuwe-domein.nl');   
define('WP_SITEURL','http://jou-nieuwe-domein.nl');[/infobox]   Klaar, je wordpress site doet het weer als vanouds!