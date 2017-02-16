title: IP range calculatie van naar met IP mask in PHP
link: http://vandersluijs.nl/blog/2012/04/ip-range-calculatie-van-naar-met-ip.html
author: tvdsluijs
description: 
post_id: 195
created: 2012/04/23 22:00:00
created_gmt: 2012/04/23 22:00:00
comment_status: open
post_name: ip-range-calculatie-van-naar-met-ip
status: publish
post_type: post

# IP range calculatie van naar met IP mask in PHP

Wil je ooit een check doen of een ip adres voorkomt binnen een ip range in PHP.  
  
Dan is dat mogelijk. Zelfs als je dit wilt doen via mysql.  
  
Je zal in MySQL dan wel een from en to veld aanmaken met een (UNSIGNED) INT maar het is mogelijk.  
  
Wel zal je de IP range dan moeten omvormen naar een from en to  
  
Hieronder een script waarmee je heel makkelijk in PHP een IP adres met mask omzet naar begin en eind reeks.