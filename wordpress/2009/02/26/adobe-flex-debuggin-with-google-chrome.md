title: Adobe Flex Debuggin with Google Chrome
link: http://vandersluijs.nl/blog/2009/02/adobe-flex-debuggin-with-google-chrome.html
author: tvdsluijs
description: 
post_id: 438
created: 2009/02/26 19:50:00
created_gmt: 2009/02/26 19:50:00
comment_status: open
post_name: adobe-flex-debuggin-with-google-chrome
status: publish
post_type: post

# Adobe Flex Debuggin with Google Chrome

[ ](http://polygeek.com/1342_flex_debugging-with-chrome)So you wanna use your Google Chrome Browser to debug Adobe Flex Web Applciations ?  
  
Yes I know, Internet Explorer doesnt work since you start using Firefox and Google Chrome is so light that is just starts in seconds with one click.  
  
Since developing flex at [NL4B](http://www.nl4b.com/) (NL for Business) I searched for a easy and fast way to test my Flex Apps. Hate IE / Internet Explorer in the mean time, Firefox well since chrome dont use it a lot anymore so I want to debug in Chrome ! Is that possible ? Yes it is.  
  
  
  
Setup  
To make Chrome your default External Web Browser in FlexBuilder just go to Window -> Preferences And then open up General and select Web Browser - just like you see in the image above. In my case I had to click the New button to add Chrome to the list.  
  
Note: you need to add the -sandbox to the Parameters field.  
  
Tada !!! And you are ready to go !  
  
Oh... wait stop ! You don't have the Adobe Flash Debug player for chrome yet ? Well there is no Adobe Flash Debug Player for Google Chrome. But... you can use the Flash Player debug version for FireFox ;-). If you need the debug player then go to the [Adobe Flash Player Support Center](http://www.adobe.com/support/flashplayer/downloads.html).  
  
There is one catch however... if you install the Flash Player debug version for FireFox you will get Adobe Flex debug / error messages in also.. if you don't want that to happen keep on reading !  
  
Heres what [Dan Florio](http://polygeek.com/1342_flex_debugging-with-chrome) did:  


  

  * Download the [XPI archive of the Flash Player Plugin ](http://fpdownload.macromedia.com/get/flashplayer/xpi/current/flashplayer-win.xpi)\- you may need to right-click and save as to download
  

  * Rename the file from flashplayer-win.xpi to flashplayer-win.zip and then unzip the file
  

  * Now copy the flashplayer.xpt and NPSWF32.dll files into your FireFox plugins folder - which should be in %APPDATA%MozillaPlugins. It turns out that I didnt have plugins folder for FireFox so I made one. My path eneded up being: C:Documents and SettingsusernameApplication DataMozillaPlugins  
Once I copied those two files into that folder and restarted FireFox I had the regular Flash Player running in FireFox and the debug Flash Player running in Chrome. Just what I wanted.
  
  
Wow... debuggin with Google Chrome is the best thing ever.. and so fast !  
  
Which is good because now you can do lots of debugging of your shitty-code. :-)  
  
   
  
With special thanks to [Dan Florio](http://polygeek.com/1342_flex_debugging-with-chrome)

## Comments

**[http://www.bettysdahlias.com/](#5050 "2016-06-21 10:06:23"):** I need these tickets because I’m getting married and have no spare pennies to go to any festivals and I am funked off at that. I love The Spirit of Folk and would truly love you if you made my year and sent me and my man off for a folk filled funkster weekend.

