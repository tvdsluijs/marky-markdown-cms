title: Correct sub menu in Artisteer and Wordpress
link: http://vandersluijs.nl/blog/2009/11/correct-sub-menu-in-artisteer-and.html
author: tvdsluijs
description: 
post_id: 359
created: 2009/11/16 20:22:00
created_gmt: 2009/11/16 20:22:00
comment_status: open
post_name: correct-sub-menu-in-artisteer-and
status: publish
post_type: post

# Correct sub menu in Artisteer and Wordpress

Like the submenus that Artisteer generates within the temaplate you made but you cannot find them anywhere when you installed the template on your wordpress websites. I am talking about the Categories and Archives sub menus off course. Well, it is actually very simple. Just put this piece of code in your template header.php  Find the next lines in Header.php: 

>   
      


Delete them. Then put these lines back where the other lines stood. 

>     
> 
>   
            
          
        
>   * Archivesf   
          
        
>   
    

Save, ready !