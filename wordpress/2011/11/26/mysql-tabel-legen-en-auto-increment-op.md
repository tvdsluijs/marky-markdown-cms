title: Mysql Tabel legen en Auto-increment op 0 zetten
link: http://vandersluijs.nl/blog/2011/11/mysql-tabel-legen-en-auto-increment-op.html
author: tvdsluijs
description: 
post_id: 218
created: 2011/11/26 03:39:00
created_gmt: 2011/11/26 03:39:00
comment_status: open
post_name: mysql-tabel-legen-en-auto-increment-op
status: publish
post_type: post

# Mysql Tabel legen en Auto-increment op 0 zetten

Vaak wil je een MySQL tabel even snel legen en de auto increment terug naar 0 zetten.  
  
Dit kan door alle rijen te legen en daarna de tabel te “alteren” (aan te passen) door handmatig de autoincrement weer naar 0 te zetten maar het kan eenvoudiger.  
  
Het legen van een tabel en het verserven of op 0 zetten van een auto-increment veld doe je door de volgende regel SQL uit te voeren op je database  
  
TRUNCATE TABLE naam_van_tabel;  
  
Hiermee verwijder in je in 1x alle records uit je tabel en zet je de auto increment van je veld weer op 0 / het begin punt)