title: TODO and FIXME within Adobe Flex
link: http://vandersluijs.nl/blog/2009/01/todo-and-fixme-within-adobe-flex.html
author: tvdsluijs
description: 
post_id: 448
created: 2009/01/15 17:35:00
created_gmt: 2009/01/15 17:35:00
comment_status: open
post_name: todo-and-fixme-within-adobe-flex
status: publish
post_type: post

# TODO and FIXME within Adobe Flex

Today I was thinking, why doesnt the flex builder has the ability to show tasks like TODO and FIXME. As I was browsing thru my code of the big project I am working on at a Big financial / Insurance Company, I found some code to be obsolete.  
  
But I was not sure about it. So I commented out the code and wanted to put a reminder there that I should remove it after testing.  
  
But I could not use TODO or FIXME. Or can I ?  
  
  
  
I went searching for this problem on the internet. i found out that Adobe Flex does not support TODO and FIXME (yet). I did not think my colleague's at [NL for Business](http://www.nl4b.com/) would know so I started digging Google deeper and Deeper.  
  
And then I found it ! A german Guy named Dirk (Hallo Dirk wie gehts wie stehts, danke für diese plugin, das ist wirklich ganz toll !) build a plug-in for eclipse which would do the TODO and FIXME stuff in Adobe Flex.  
  
On his [blog](http://www.richinternet.de/blog/index.cfm?entry=911D4B57-0F0D-5A73-AF6F4D4D04099757)  you can find this great plugin.  
  
**How it works:** the plugin parses every MXML/AS file when opened and searches comments (both MXML and AS comments) for _TODO_ and _FIXME_ tokens (this search is case insensitive, so it also finds _todo_). The same action takes place after a file has been saved. If a token is found, a new Task gets generated with its message set to the comment and displayed in the _Task View_ (To open _Task View_ choose _Window-->Other Views...-->Basic-->Tasks_ in Flex Builder 2 standalone and _Window-->Show View-->Other-->Basic-->Tasks_ when running Flex Builder 2 as a plugin in Eclipse). Note: to really delete a Task you have to delete the comment - deleting a Task from the Task View does not kill the comment, so after you save the file the Task will reappear.  
  
**Installation:** unzip the ZIP file and move the content of the _plugins_ folder to the _plugins_ folder of Flex Builder 2 / Eclipse. Then, close Flex Builder 2 / Eclipse and restart. The ZIP also contains a Test.mxml file which can be used to test the functionality.  
  
**Download ?  
[Download Flex Builder 2 Task Plugin 1.0.0](http://www.richinternet.de/blog/download/flexbuilderTask_1.0.0.zip)**  
  
It works for Adobe Flex SDK 2, 2.0.1 and Flex 3, 3.0.1, 3.0.2