title: User ip validation, ip add by email script php mongodb
link: http://vandersluijs.nl/blog/2015/03/user-ip-validation-ip-add-by-emai.html
author: tvdsluijs
description: 
post_id: 8
created: 2015/03/20 20:17:00
created_gmt: 2015/03/20 20:17:00
comment_status: open
post_name: user-ip-validation-ip-add-by-emai
status: publish
post_type: post

# User ip validation, ip add by email script php mongodb

Okay... the title of this blogpost is a bit off....

I really don't know how to call my new script. It's a IP validator, IP add, Email with timed validation link PHP MongoDB script. Does that makes sense? No? Let me explain So you got a page or site or script or backend you only want access to for a few people. It could be your family or you clients or the neighbours, but you don't want to hand out usernames and passwords for them to log in. What do you do? Yes you give them access on their IP address. But... IP addresses change! They change a lot! You don't want to change the code every time someones ip address changes. So you create a IP add page with a never to guess name, like: http://www.yourdomain.com/gotothispagesoyoucanaddyourip123.php and when your family member visits the page it automatically add the visitors IP, that so cool and handy! No, it's NOT! I would never guess this url! But, here's google chrome! You go to this page .... and guess what Chrome does? Yes... it sends all kind of information to it's servers. It sends this : "hey Creator look what I found! A page You have never visited of indexed before! But Now you CAN!" Bye Bye to your once oh so safe (NOT!!!) ip address add page! So I created a better ip address add page and everybody in the world can know about it! Because it doesn't do anything except, if you are not allowed to visit the page, show a one field form. With this form the visitor of you page can fill in his (or her) email address. I see you thinking.... but when everybody can fill in an email address, wouldn't everybody get access? No! Because I build in more failsafes. First, the domain or email address has to be know by the system. You can add multiple domains and email addresses that are accepted by the system. Second, the system will mail a special hashed link to that email address that is only valid for a certain period of time (you can set this in the config). The user has to open his mail and press the link before it's invalid on the ip address he (or she) visited your site. Now the IP address is validated to the system and the user can access your page, or script or whatever. But wait, there is more! After say 30 days (you can change that in the config) the IP address will be erased from the system! Why? Well, maybe the IP address changes for that user and it will just fill up your system with IP addresses that you don't want anymore. So after 30 days (of what ever you want) the visitor has to re-validate his or her IP address again. But! There is more! You might not want to be re-validating your own IP address over and over again, so you can put in a few addresses in the config that are allowed all the time! And yes.... there is even more! The system is build on blazing fast MongoDB! And it's free to use! You can find my new Script on [BitBucket](https://bitbucket.org/tvdsluijs/ip-validator-ip-add-script-with-php-and-mongodb). 

**_I do like coffee! So if you like, please donate a penny or so._**

**_ You can find my donate buttons on the top right!_**