title: Calculate Date from day of year in PhP
link: http://vandersluijs.nl/blog/2008/11/calculate-date-from-day-of-year-in-php.html
author: tvdsluijs
description: 
post_id: 475
created: 2008/11/02 00:00:00
created_gmt: 2008/11/02 00:00:00
comment_status: open
post_name: calculate-date-from-day-of-year-in-php
status: publish
post_type: post

# Calculate Date from day of year in PhP

So why would you want to calculate a day of year to a date ?  
Well I needed it for my Sudoku script. (<http://sudoku.gebruikmaar.nl>)  
I wanted to show a new Sudoku every day, and let the visitors be able to show the sudoku of yesterday and the days before.  
  
To get a "random" daily new sudoku I use the year day number. (so you've got 365 year days a year)  
When going to the yesterday's sudoku puzzle I do a day of year - 1.  
But on the same screen I like to show the date.  
So here you are.... I want to be able to calculate the date from the day of year I have choosen.  
Here's that code  
  
[php]  
$todayid = date("z"); // to get today's day of year  
  
function dayofyear2date( $tDay, $tFormat = 'd-m-Y' ) {  
$day = intval( $tDay );  
$day = ( $day == 0 ) ? $day : $day - 1;  
$offset = intval( intval( $tDay ) * 86400 );  
$str = date( $tFormat, strtotime( 'Jan 1, ' . date( 'Y' ) ) + $offset );  
return( $str );  
}  
  
echo dayofyear2date($todayid);  
[/php]  
  
ps: did you know that 1 year is not exactly 365 days ? 1 year is 365,242199 dagen   
ps2: That is why the leap-year exists.