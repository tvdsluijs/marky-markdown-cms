title: Juiste datum in PhP
link: http://vandersluijs.nl/blog/2008/10/juiste-datum-in-php.html
author: tvdsluijs
description: 
post_id: 482
created: 2008/10/27 18:14:00
created_gmt: 2008/10/27 18:14:00
comment_status: open
post_name: juiste-datum-in-php
status: publish
post_type: post

# Juiste datum in PhP

Well everybody knows this problem.  
  
You want to display a nice date on your PhP site (e.g. Tuesday, 15 February 2008) but it doesn't do it in your own language.  
  
Like me, I always want to display the date in the dutch language. Today I made new page on my [www.gebruikmaar.nl](http://www.gebruikmaar.nl/) page to display the week numbers. ([weeknummers.gebruikmaar.nl](http://weeknummers.gebruikmaar.nl/)). But even with the setlocal (setlocale(LC_ALL, 'nl_NL');) on nl_NL it did not work... it shows English weekdays and month name.... so... I decided to make a general script that does this for me... no matter what the language settings are.  
  
  
  
Here's that script.  
  
[php]  
$month = date( "n" );  
$monthday = date( "j" );  
$weekday = date( "w" );  
$year =  date( "Y" );  
  
$arrDays = array('Zondag','Maandag','Dinsdag','Woensdag','Donderdag','Vrijdag','Zaterdag');  
$arrMonths = array('Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus',  
'September', 'Oktober', 'November', 'December') ;  
  
$monthname = $arrMonths[$month];  
$dayname = $arrDays[$weekday];  
$today = $dayname.", ".$monthday." ".$monthname." ".$year;  
echo $today;[/php]