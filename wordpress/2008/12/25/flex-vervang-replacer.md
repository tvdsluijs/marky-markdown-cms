title: Flex vervang / replacer
link: http://vandersluijs.nl/blog/2008/12/flex-vervang-replacer.html
author: tvdsluijs
description: 
post_id: 461
created: 2008/12/25 11:29:00
created_gmt: 2008/12/25 11:29:00
comment_status: open
post_name: flex-vervang-replacer
status: publish
post_type: post

# Flex vervang / replacer

Heb je dat ook wel eens ? Dat je in een string iets wilt wijzigen in Adobe Flex en Actionscript  maar ... hoe ?  
  
Tja tijdens diverse werkzaamheden bij NL for Business (NL4B) had ik dat ook. Waarom bestaat er geen goede replace in Adobe Flex.  
  
Nu wel ;-)  
  
Ik heb de volgende code gemaakt, deels vanuit andere code sites.  
  
  
  
Zet de volgende code binnen je AS3 script of tussen <mx:script.  
  
  

    
    
    private function str_replace( replace_with:String,   
    replace:String,   
    original:String ) : String {  
          var array:Array = original.split(replace);  
          return array.join(replace_with);  
      }

  
Hoe te gebruiken ? Heel simpel, replace_with is waarmee je het wilt vervangen, replace is het deel dat je wilt verangen, original... is dus het origineel.  
  
  

    
    
       
    var newString:String = str_replace("", " ", postal);

  
dus....  
  
original = "The quick brown fox jumps over the lazy dog";  
  
replace_with = "yellow";  
  
replace = "brown";  
  
wordt : "The quick yellow fox jumps over the lazy dog";