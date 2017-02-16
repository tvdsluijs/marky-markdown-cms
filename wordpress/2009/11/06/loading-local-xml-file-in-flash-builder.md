title: Loading local XML file in flash builder
link: http://vandersluijs.nl/blog/2009/11/loading-local-xml-file-in-flash-builder.html
author: tvdsluijs
description: 
post_id: 370
created: 2009/11/06 07:00:00
created_gmt: 2009/11/06 07:00:00
comment_status: open
post_name: loading-local-xml-file-in-flash-builder
status: publish
post_type: post

# Loading local XML file in flash builder

There are a few ways to get a XML file as dataprovider within flash builder. Some people asked me how to do that in an easy way.  
  
Well, in Flex Builder there actually was no easy way. You had to code it all yourself. But with the new Flash Builder you can do it pretty much automatically.  
  
In this small manual I will tell you how.  
  
  
  
Let's assume you have the following .xml file in data/your_file.xml  
  
[xml]  
  
  
  
Jim   
32   
  
  
Sandra   
35   
  
  
[/xml]  
  
  
Here are some methods you can use:  
  
**1\. Simple mxml**  
  
[java]  
  
  
  
[/java]  
  
  
**2\. Use of the HTTPService, as seen in this ****[video**](http://www.adobe.com/devnet/flex/videotraining/flex4beta/xml/fiaw_v1_08.html)  
  
[java]  
  
  
  
  
import mx.collections.ArrayCollection;  
import mx.rpc.events.ResultEvent;  
  
public var myData:ArrayCollection;  
  
protected function myHttpService_resultHandler(event:ResultEvent):void {  
myData = event.result.colleagues.colleague;  
}  
]]