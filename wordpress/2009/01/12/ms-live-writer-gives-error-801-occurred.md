title: MS Live Writer gives "Server Error 801 Occurred" on Joomla!
link: http://vandersluijs.nl/blog/2009/01/ms-live-writer-gives-error-801-occurred.html
author: tvdsluijs
description: 
post_id: 451
created: 2009/01/12 10:31:00
created_gmt: 2009/01/12 10:31:00
comment_status: open
post_name: ms-live-writer-gives-error-801-occurred
status: publish
post_type: post

# MS Live Writer gives "Server Error 801 Occurred" on Joomla!

If you are updating your Joomla! site / blog with Microsoft Live Writer and you get a "Server Error 801 Occurred" when updating you could aks yourself "did I delete a category or section from your joomla! site?".  
If you did youre MS Live Writer cannot find some of the categories anymore and you cannot blog with Live Writer anymore.  
That's a bit of a problem.  
  
  
You could try and update your category's and section in the MS Live Writer tool, but trust me that is not going to work.  
The problem lies deeper. As the Live Writer creates your account when installing and configuring the tool it gets the standard category from joomla!. When this differs from your configured Live Writer account you will get the "Server Error 801 Occurred" error.  
But we can solve this very easily.   
In your MS Live Writer Menu -> "Blogs" -> "Edit Blog Setting". On the Account Tag click on the "Update Configuration Button". Press Next on the first screen (you don't need to change any information here). On the next screen Select "Movable Type Api" at the "Type of blog that you are using" and put the next url in the "Remote posting URL for your blog" -> "[http://www.yoursite.com/xmlrpc/index.php"](http://www.yoursite.com/xmlrpc/index.php), change the yoursite.com part to suite your own site.  
Press next.   
Wait until it did some downloading and configuring.   
Press Finish.  
Tadaaaaaaaa, you're ready to go.