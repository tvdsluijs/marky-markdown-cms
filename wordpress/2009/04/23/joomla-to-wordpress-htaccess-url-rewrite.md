title: Joomla! to Wordpress htaccess url rewrite
link: http://vandersluijs.nl/blog/2009/04/joomla-to-wordpress-htaccess-url-rewrite.html
author: tvdsluijs
description: 
post_id: 420
created: 2009/04/23 12:00:00
created_gmt: 2009/04/23 12:00:00
comment_status: open
post_name: joomla-to-wordpress-htaccess-url-rewrite
status: publish
post_type: post

# Joomla! to Wordpress htaccess url rewrite

Well, one of the main problems for me to go from joomla! to wordpress were my SEF Urls.  
  
Google (and other search engines) knows or knew all the right (but old Joomla!) urls to my pages and I did not want to lose that.  
  
Of course going from Joomla! to Wordpress that would be a problem.  
  
If you are using sh404sef I have part of the sollution for you.First I started to use 2 extra components :  
  
  


  
  


  

[Redirection](http://urbangiraffe.com/plugins/redirection/)
  

2.1.13
  

A redirection manager By [John Godley](http://urbangiraffe.com/).
  
  
  
  
  
  
and  
  
  


  
  


  

[Useful 404's](http://skullbit.com/wordpress-plugin/useful-404s/)
  

1.5
  

Create more useful 404 error pages, including email notifications for bad links. See <http://www.alistapart.com/articles/amoreuseful404> for the inspiration behind this plugin. By Devbits.
  
  
  
  
  
  
I started to use Redirection so I could redirect old urls to the new ones. Problem was that there were a lot of links, and I did not want to sit down for many hours and redirect them.  
  
So I also started to use Useful 404's. Not only the not redirected urls would give a better explaination but I also got a mail with the broken url.  
  
With this I could redirect my urls slowly and did not had to do them all at once.  
  
But..... of course I wanted this to go automaticly .... by using htaccess.  
  
I tried to create a rewrite rule but without any result... untill I started using the [Wordpress Forum](http://wordpress.org/support/).  
  
Someone named " kishor123"  gave me the answer on this [forum post](http://wordpress.org/support/topic/197300?replies=2).  
  
The htaccess rewriterule is actually very simple !  
  
**RewriteRule ^(.*).html$ <http://www.domain.com/$1> [NC,R=301,L]**  
  
Just change the domain.com in your own url, and you are ready to go !  
  
This will not work for All URL's but for the most it will.  
  
If you used to use Joomla! with sh404sef this is a htaccess rule you cann't live without !