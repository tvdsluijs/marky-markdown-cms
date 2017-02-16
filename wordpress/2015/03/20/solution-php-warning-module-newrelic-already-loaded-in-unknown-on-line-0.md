title: Solution : PHP Warning: Module ‘newrelic’ already loaded in Unknown on line 0
link: http://vandersluijs.nl/blog/2015/03/solution-php-warning-module-newrelic-already-loaded-in-unknown-on-line-0.html
author: tvdsluijs
description: 
post_id: 2937
created: 2015/03/20 17:56:36
created_gmt: 2015/03/20 17:56:36
comment_status: open
post_name: solution-php-warning-module-newrelic-already-loaded-in-unknown-on-line-0
status: publish
post_type: post

# Solution : PHP Warning: Module ‘newrelic’ already loaded in Unknown on line 0

So you are using NewRelic!

Good for you! New Relic is the Application Performance tool for your site with complete performance visibility for all aspects of your software environment. With it you can measure  Customer Experience and Business Success!! But what about that nasty error?!?!?!  ![Solution : PHP Warning: Module ‘newrelic’ already loaded in Unknown on line 0](https://itheo.nl/wp-content/uploads/2016/02/newrelic-300x300.png)New Relic is an American software analytics company based in San Francisco, California.It's technology, delivered in a software as a service model, monitors Web and mobile applications in real-time that run in cloud, on-premises, or hybrid environments. If you cannot build a web / mobile application monitor yourself you really should install New Relic. It really helps to find problems on server and application level. Do you have a slow web-shop? New Relic will tell you where the bottleneck is. It could be the hardware, but also MySQL or PHP. It really helps you pinpoint where the problems are. Developing without this piece of software installed on your linux servers is a no go! But... if you can build a monitoring system yourself... do it yourself! 

## New Relic Error Module ‘newrelic’ already loaded

At a certain point I had this error coming back to my terminal window when ever I ran a PHP script. 

>  PHP Warning: Module ‘newrelic’ already loaded in Unknown on line 0

I drove me crazy.... why is this error coming back to me. And then it came to me.... a new version was installed a few weeks ago..... would there be multiple config-files? And yes, when I searching for "newrelic.ini" I found several. 

## Solution : Module ‘newrelic’ already loaded in Unknown on line 0

I solved it by removing  /etc/php5/cli/conf.d/newrelic.ini No more : PHP Warning No more : **Module ‘newrelic’ already loaded in Unknown on line 0** New Relic is back to being just great!!