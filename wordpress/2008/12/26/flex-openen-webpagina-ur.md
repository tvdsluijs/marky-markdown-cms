title: Flex Openen Webpagina / URL
link: http://vandersluijs.nl/blog/2008/12/flex-openen-webpagina-ur.html
author: tvdsluijs
description: 
post_id: 460
created: 2008/12/26 13:34:00
created_gmt: 2008/12/26 13:34:00
comment_status: open
post_name: flex-openen-webpagina-ur
status: publish
post_type: post

# Flex Openen Webpagina / URL

Een web pagina openen vanuit flex, of een mailto sturen vanuit flex is eenvoudiger dan je denkt.  
  
Tijdens een project bij NL4B (NL for Business) had ik dit nodig en na wat zoeken kwam ik er achter dat de volgende code hiervoor erg makkelijk werkte.  
  
  
  
In je AS3 script zet je dit onderdeel  
  
  

    
    
       private function getURL(url:String, window:String):void {  
          var request:URLRequest;  
          request = new URLRequest(url);  
          navigateToURL(request, window);  
      }

  
En via een click kan je hem dan aanroepen.  
  
  

    
    
    click="getURL('http://www.iamboredsoiblog.eu', '_blank');"

  
Waarbij de url voor de site staat die je wilt openen (of mailto: voor mailtje) en window voor hoe je het scherm van de url wilt openen. _blank opent een nieuw scherm.