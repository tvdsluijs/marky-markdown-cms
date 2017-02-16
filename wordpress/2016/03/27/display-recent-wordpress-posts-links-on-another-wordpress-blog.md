title: Display recent Wordpress Posts links on another WordPress Blog
link: http://vandersluijs.nl/blog/2016/03/display-recent-wordpress-posts-links-on-another-wordpress-blog.html
author: tvdsluijs
description: 
post_id: 2645
created: 2016/03/27 07:07:43
created_gmt: 2016/03/27 07:07:43
comment_status: open
post_name: display-recent-wordpress-posts-links-on-another-wordpress-blog
status: publish
post_type: post

# Display recent Wordpress Posts links on another WordPress Blog

So you've got a lot of Blogs or sites in Wordpress and you want to share links to posts from one site to the other? With the following script you can Display recent Wordpress Posts links on another WordPress Blog! I've got several blogs! And I don't like crossposting! But I do like showing links from one blog to the other. So I do like, crosslinking yes! But there is not a very good sollution to display your wordpress posts on other wordpress blogs. So I created a small script do do this just for you! 

## Display recent Wordpress Posts links

Before you head off to my script there are a few small steps to make before you can use my script. First you will have to install a plugin on your site called [Snippets](https://wordpress.org/plugins/code-snippets/). With this plugin you can add extra functionality to your site. Installed it? Great! You need some information from your other site (where you want to display the post links from) to get my script working. You need the following 4 items from your **wp_config.php** to get this up and running. 

  * DB_NAME
  * DB_USER
  * DB_PASSWORD
  * $table_prefix
You get this information from your wp_config file. It starts at about line 19. You'll need a ftp connection to your server or you can use the plugin [WP Config File Editor](https://nl.wordpress.org/plugins/wp-config-file-editor/) on your site to get this information. When the two sites are on different servers you also need to fill in the Host part. When on the same server you can leave localhost. But when not... you will need to fill in the IP address of the other server. So create a new snippet within the snippet plugin with the code below. Fill in the blanks (XXXXXXX) from your wp_config file. And then you're all done! Want to show off some links to posts on the other site? Just add [show-postsothersite] To your post or sidebar / footer widgets. You can add some extra variables to the outcome, like name (of the site) and number of links to show. You can add these very easily like: [show-postsothersite sitename='vandersluijs.nl' limit='10'] And your all done! [pastacode lang="php" path_id="5e543011b1259e2bc6d4" file="wordpresslinks.php" highlight="" lines="" provider="gist"/] 

## Wordpress Posts links on another WordPress Blog example

So wanna see it work? Here you can see some examples of my script working form these following wordpress blogs : 

  * dezeeuwsefotograaf.nl
  * itheo.nl
  * 40enfit.nl
  [show-postsothersite site='40enfit' limit='5' sitename='40 en fit!'] [show-postsothersite site='itheo' limit='5' sitename='iTheo'] [show-postsothersite site='dezeeuwsefotograaf' limit='5' sitename='De Zeeuwse Fotograaf!'] Like this script? Please [Donate](http://snurl.eu/donate-one-euro) one euro for a cup of coffee! Thank you!