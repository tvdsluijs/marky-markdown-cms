title: Mongodb: Failed to connect to 127.0.0.1:27017, reason: errno:111 Connection refused
link: http://vandersluijs.nl/blog/2015/05/mongodb-failed-to-connect-to.html
author: tvdsluijs
description: 
post_id: 5
created: 2015/05/07 20:14:00
created_gmt: 2015/05/07 20:14:00
comment_status: open
post_name: mongodb-failed-to-connect-to
status: publish
post_type: post

# Mongodb: Failed to connect to 127.0.0.1:27017, reason: errno:111 Connection refused

Plotseling doet je mongodb het niet meer en krijg je deze melding te zien. 

> Mongodb: Failed to connect to 127.0.0.1:27017, reason: errno:111 Connection refused

Een simple maar doeltreffende oplossing is om de volgende 3 regels op je terminal te runnen.
    
    
    sudo rm /var/lib/mongodb/mongod.lock
    mongod --repair
    sudo service mongodb start

Let op: je kan het beste uitzoeken waarom je deze foutmelding krijgt: "Mongodb: Failed to connect to 127.0.0.1:27017, reason: errno:111 Connection refused" en proberen dit op te lossen. De oplossing die ik hier boven geef is dus geen oplossing voor de langere termijn en ik een echt nette oplossing is het niet. Maar als je Mongodb snel weer op de been wilt hebben dan kan dit voor even de oplossing zijn.