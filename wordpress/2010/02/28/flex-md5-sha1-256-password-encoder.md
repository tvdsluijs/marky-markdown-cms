title: Flex MD5 / SHA1-256 Password encoder
link: http://vandersluijs.nl/blog/2010/02/flex-md5-sha1-256-password-encoder.html
author: tvdsluijs
description: 
post_id: 313
created: 2010/02/28 21:16:00
created_gmt: 2010/02/28 21:16:00
comment_status: open
post_name: flex-md5-sha1-256-password-encoder
status: publish
post_type: post

# Flex MD5 / SHA1-256 Password encoder

I build a lot of Flex Applications on PhP / MySQL Backends. Now these PhP backends most of the time check if the users has the correct rights for e.g. opening a database or getting some data or what ever.  
  
When a new user of the Flex or AIR application want’s to change their password or create a new user with password I triggerd a nice little php password create script that makes a nice MD5 (with salt) password out of the given readable password.  
  
But this is actually an extra step in the process I don’t want. Wouldn’t it be great if Flex could create this MD5 password with or without salt ?  
  
Or even better, what if Flex could create a MD5, SHA1, SHA-256 password with or without salt out of the given readable password ?  
  
Now it is possible with this simple to use script:  
  
[as3]Encryption.encrypt(strPW, EncType, Salt, SaltNr);[/as3]  
  
Actually Adobe already have a class that does all the work for you. It’s the Crypto classes (MD5.as / SHA1.as) that you have to use together with the utils class (IntUtil.as) that makes this all possible.  
  
The nice thing about this is, that it supports the same encryption as PhP, so no matter if you create it in PhP or in Flex, the outcome is always the same. And comparing them from Flex to PhP or visa versa will garantuee a correct outcome.  
  
Have fun !  
  
Want to have the complete source? Go to my [Github](https://github.com/tvdsluijs/-SHA1-256-Password-encoder/tree/)  
  
  
  
  
  
  
  
![](https://www.paypalobjects.com/en_US/i/scr/pixel.gif)