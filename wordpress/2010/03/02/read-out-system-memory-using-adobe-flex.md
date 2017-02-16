title: Read out system memory using Adobe Flex
link: http://vandersluijs.nl/blog/2010/03/read-out-system-memory-using-adobe-flex.html
author: tvdsluijs
description: 
post_id: 312
created: 2010/03/02 19:15:00
created_gmt: 2010/03/02 19:15:00
comment_status: open
post_name: read-out-system-memory-using-adobe-flex
status: publish
post_type: post

# Read out system memory using Adobe Flex

So you have a application, and you want to know how much it takes of your (or the users) system memory ?  
  
Easy, just use the following code:  
  
  
  
[as3]  
  
  
  
  
  
public function SySMem():void{  
var memoryUsedInKb:int = int(System.totalMemory / 1024);  
lblSysMem.text = memoryUsedInKb.toString()+" KB";  
}  
]]