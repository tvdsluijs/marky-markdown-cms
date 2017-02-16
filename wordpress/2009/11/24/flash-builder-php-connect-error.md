title: Flash Builder php connect error.
link: http://vandersluijs.nl/blog/2009/11/flash-builder-php-connect-error.html
author: tvdsluijs
description: 
post_id: 357
created: 2009/11/24 12:25:00
created_gmt: 2009/11/24 12:25:00
comment_status: open
post_name: flash-builder-php-connect-error
status: publish
post_type: post

# Flash Builder php connect error.

Do you get a connection error in Flash Builder when connecting to a MySQL database with PhP and Zend ?  
  
The error looks somewhat like this :  
  
   


> **Fatal error**: Maximum execution time of 60 seconds exceeded in **D:xamppphpPEARZendDbAdapterPdoAbstract.php** on line **0**

  
Well, then you might have configured a wrong server port.  
  
Here’s the solution  
  
  
  
So when you are generating a sample for your data in your MySQL database you get an error message like this right ?  
  
The problem might be the port it is automatically selecting for you in the connection screen.  
  
In my case it configured server port 8080 as my localhost is working with server port 8080 (under xampp).  
  
But this server port is incorrect. The MySQL server port is actually port 3306.  
  
So if you put that into your connection screen (like below) it wil work like a charm.  
  
Happy flash building !