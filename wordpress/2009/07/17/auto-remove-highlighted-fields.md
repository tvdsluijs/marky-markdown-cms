title: Auto remove highlighted fields
link: http://vandersluijs.nl/blog/2009/07/auto-remove-highlighted-fields.html
author: tvdsluijs
description: 
post_id: 401
created: 2009/07/17 11:38:00
created_gmt: 2009/07/17 11:38:00
comment_status: open
post_name: auto-remove-highlighted-fields
status: publish
post_type: post

# Auto remove highlighted fields

This week when working at [NL for Business](http://www.nl4b.com/) I was creating some PDF documents with Adobe Form Designer for a demo.  
  
I noticed that when I had some required fields they instantly turned red and had a blue highlighting.  
  
I really really did not like this. So I searched the net and found a way to remove this  
  
  
  
When you put this into your code (at a point that the the form is ready)  


  
  
  

    
    
       1:   

  
  
  

    
    
       2:  if (app.runtimeHighlight == true)

  
  
  

    
    
       3:  {

  
  
  

    
    
       4:  app.runtimeHighlight = false;

  
  
  

    
    
       5:  }

  
   
  


  
The highlighting is gone !  
  
Wowow !!!  
  
If the person using the form presses a button, they just light up like they are suppose to do.  
  
Off course when you press the highlight button in Acrobat, they will also light up.