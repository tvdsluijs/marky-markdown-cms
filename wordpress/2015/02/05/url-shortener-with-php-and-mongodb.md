title: Url shortener with PHP and MongoDB script
link: http://vandersluijs.nl/blog/2015/02/url-shortener-with-php-and-mongodb.html
author: tvdsluijs
description: 
post_id: 22
created: 2015/02/05 19:42:00
created_gmt: 2015/02/05 19:42:00
comment_status: open
post_name: url-shortener-with-php-and-mongodb
status: publish
post_type: post

# Url shortener with PHP and MongoDB script

Last week at work some marketing guys asked me if I could build a URL Shortener script.

They did not want to use bitly anymore. I told them that I had a url shortener sites ones (snurl.eu) and that I could probably could find the script again. When I found the script and thought about MongoDB... I guess it was time to rewrite it.  So when I had the internet site Snurl.eu I wanted to have my own URL shortener service. I was kinda lazy so I searched for a PHP script that did just wat I wanted. So I stumbled upon the Script build by Brian Cray. His "**[Free PHP URL shortener script that kicks ass](http://briancray.com/posts/free-php-url-shortener-script/)**" as he called it was perfect. Build in 2009.. so a bit old but it did the trick. ** ** Now 6 years later I rebuild it. Why....? well I just love MongoDB. Don't get me wrong. MySQL is great... but for simple and big ass databases.. with hits-updates.... well you don't want to use MySQL anymore! You want a NoSQL version! Since I created the [NopNop.nl](http://www.nopnop.nl/) site with MongoDB and it has shown it's strength and speed to me, I really wouldn't know why I would use MySQL for these purposes. Sorry.... back to the Url Shortener! So.... when my colleagues asked me for this Url Shortener script, I pulled the Brian Cray script and did a little rebuild :-) It's still has these great features (and more!): 

  * Can shorten over 42 billion unique URLs in 6 or less characters or if you want it can do 12.000.000 in only 4 characters!!!
  * It's even super duper super fast, as it uses MongoDB and uses like almost no server resources
  * Yes, it does include an API, for creating short URL's on the fly!
  * Wanna count those visites? Just turn it on!
  * Option to limit to one ore more IP addresses for personal use and to prevent spamming!!
  * It uses only alphanumeric characters so all browsers can interpret the URL (yes even IE)
  * SQL injection hacks?? Ha ha ha it's Mongo!!!
  * Url realness checker! No more 404's
  * Uses 301 redirects for SEO.
  * Wanna cache? Not needed with MongoDB, but still an option!
  * Wanna use your own short url? Just send it with the Long Url!

### Installation is easy!

 

**Make sure your server meets the requirements:**

  * Run this from your own (short) domain
  * Apache
  * PHP
  * MongoDB

Download the script from [BitBucket](https://bitbucket.org/tvdsluijs/url-shortener-php-mongodb)!

Upload the files to your web server

If you want to use the caching option, create a directory named cache with permissions 777

**That's IT!**

### Using your personal URL shortener service

To manually shorten URLs open in your web browser the location where you uploaded the files. You should see a simple form to add your url, which will return a shortened version.

To programmatically shorten URLs with PHP use the following code:
    
    
    $shortenedurl = file_get_contents('http://yourdomain.com/shorten.php?longurl=' . urlencode('http://' . $_SERVER['HTTP_HOST']  . '/' . $_SERVER['REQUEST_URI']));

I like to thank [Brian Cray](https://github.com/briancray/PHP-URL-Shortener) for his versions. You can find my script on [BitBucket](https://bitbucket.org/tvdsluijs/url-shortener-php-mongodb). 

**_I do like coffee! So if you like, please donate a penny or so._**

**_ You can find my donate buttons on the top right!_**

## Comments

**[Maroc](#41 "2015-11-05 06:02:10"):** Thanks for this article :) I'm using another url shortener script called shrinky but I'll try MongoDB script to see how it works. Thanks again

