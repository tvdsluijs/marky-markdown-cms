title: GD installatie op PHP / LAMP
link: http://vandersluijs.nl/blog/2008/07/gd-installatie-op-php-lamp.html
author: tvdsluijs
description: 
post_id: 499
created: 2008/07/19 21:30:00
created_gmt: 2008/07/19 21:30:00
comment_status: open
post_name: gd-installatie-op-php-lamp
status: publish
post_type: post

# GD installatie op PHP / LAMP

Er worden veel vragen gesteld over GD installatie na een LAMP installatie op een Ubuntu server. Php GD Library dient om plaatsjes te maken in PHP. En geloof me, dat wil je. Denk maar aan een foto album. Maar ook CMS paketten zoals Joomla! maken hier gebruik van. Maar bij een standaard LAMP installatie is dit dus niet geïnstalleerd. Maar dan kan je heel makkelijk zelf.   
  
Open een putty sessie:   
  

    
    
    sudo apt-get install php5-gd

  
  
  
Daarna apache herstarten met...   
  
  
  

    
    
    sudo /etc/init.d/apache2 restart