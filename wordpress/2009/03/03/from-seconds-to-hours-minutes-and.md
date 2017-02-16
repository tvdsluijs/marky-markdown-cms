title: From Seconds to Hours, Minutes and Seconds in Actionscript
link: http://vandersluijs.nl/blog/2009/03/from-seconds-to-hours-minutes-and.html
author: tvdsluijs
description: 
post_id: 437
created: 2009/03/03 19:50:00
created_gmt: 2009/03/03 19:50:00
comment_status: open
post_name: from-seconds-to-hours-minutes-and
status: publish
post_type: post

# From Seconds to Hours, Minutes and Seconds in Actionscript

Ever wanted to calculate seconds back to Hours:Minutes:Seconds so that 5854 seconds becomes 01:37:34 ? You can do it with the following AS3 script   
  

    
    
    public function SetHMS(sec:String):String{   
          var seconds:Number = Number(sec);   
          var hours:Number = 0;   
          var minutes:Number = 0;   
          var strHours:String   
          var strMinutes:String;   
          var strSeconds:String;   
      
          while(seconds>=3600){   
              hours++;   
              seconds-=3600;   
          }   
      
          while(seconds>=60){   
              minutes++;   
              seconds-=60;   
          }                
      
          strHours = hours       strMinutes = minutes       strSeconds = seconds   
          return strHours + ":" + strMinutes + ":" + strSeconds;   
      }