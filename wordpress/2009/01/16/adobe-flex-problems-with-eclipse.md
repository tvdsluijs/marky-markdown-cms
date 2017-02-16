title: Adobe Flex, Problems with Eclipse installing Plug-ins ?
link: http://vandersluijs.nl/blog/2009/01/adobe-flex-problems-with-eclipse.html
author: tvdsluijs
description: 
post_id: 447
created: 2009/01/16 17:45:00
created_gmt: 2009/01/16 17:45:00
comment_status: open
post_name: adobe-flex-problems-with-eclipse
status: publish
post_type: post

# Adobe Flex, Problems with Eclipse installing Plug-ins ?

Well the last couple of days I have been telling you about two great eclipse plug-ins for Adobe Flex. Like the TODO/FIXME plug-in and the Flex Formatter Plug-in.  
  
After reading a bit more about these plug-ins I couldnt stop noticing that some people had problems with installing these plug-ins  
  
On my [NL for Business](http://www.nl4b.com/) Laptop I did not have any problems installing them, just dropped them in the eclipse plug-in directory.  
  
But on the PC I use on the project at the big Financial / Insurance company I had simmilar problems that other users had.  
  
  
  
So that made me thinking about why this would be. Both systems where far from the same. Different eclipse versions, and differtent Adobe Flex versions.  
  
I could not install the plug-ins with the software update within Eclipse.  
  
I was wondering if there was another Eclipse Plug-in directory on the PC. And I started searching.  
  
And there it was ! An extra eclipse plug-in directory within the Flex Builder directory.  
  
I added the plug-in (jar) files to the directory and restarted Eclipse by doing eclipse -clean and guess what !  
  
It worked !  
  
So find this directory Flex Builder 3 Plug-ineclipseplugins on my PC it was here c:Program filesAdobeFlex Builder 3 Plug-ineclipseplugins.