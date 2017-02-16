title: Email Validation on Adobe PDF, LiveCycle Designer
link: http://vandersluijs.nl/blog/2009/04/email-validation-on-adobe-pdf-livecycle.html
author: tvdsluijs
description: 
post_id: 430
created: 2009/04/07 09:32:00
created_gmt: 2009/04/07 09:32:00
comment_status: open
post_name: email-validation-on-adobe-pdf-livecycle
status: publish
post_type: post

# Email Validation on Adobe PDF, LiveCycle Designer

You want to validate an email address on your Adobe LiveCycle Designer Form ? No problem, just follow the following small tutorial.   
  
Create a new Form. Add a Text Field to it. (so far so good ;-) ) Go into the Object > Value window of the Text field Choose > validation Script Message (error) Create a nice little message saying that the mail address is wrong. Go into the Script Editor (CTRL-SHIFT-F5). Put in this little script as a JavaSscipt (run at Client) 
    
    
     var r = new RegExp();   
      
    r.compile("^[a-z0-9_-.]+@[a-z0-9_-.]+.[a-z]{2,3}$","i");   
      
      
    var result = r.test(this.rawValue);   
      
      
    if (result == true)   
      
      
        true;   
      
      
    else   
      
      
        false;  
      
     

  
  
Add a button that validates your form like the Email Submit Button.  
  
And test it ! ;-)