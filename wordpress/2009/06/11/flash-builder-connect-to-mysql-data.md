title: Flash Builder Connect To MySQL Data
link: http://vandersluijs.nl/blog/2009/06/flash-builder-connect-to-mysql-data.html
author: tvdsluijs
description: 
post_id: 408
created: 2009/06/11 21:08:00
created_gmt: 2009/06/11 21:08:00
comment_status: open
post_name: flash-builder-connect-to-mysql-data
status: publish
post_type: post

# Flash Builder Connect To MySQL Data

Today I wanted to try and connect to a Mysql server with PhP (on my Xampp installation) as shown in the Adobe Labs Tutorials. I thought everything would work, but I’ve kept getting this strange error. 

> There was an error during service introspection.   
  
**Warning**:  require_once(Zend/Loader/Autoloader.php) [[function.require-once](/function.require-once)]: failed to open stream: No such file or directory in **…………** on line **23**  
  
**Fatal error**:  require_once() [[function.require](/function.require)]: Failed opening required 'Zend/Loader/Autoloader.php' (include_path='.;D:xamppphppear;D:/xampp/htdocs/ZendFramework/library') in **D:xampphtdocsadresboekieadresboekie-debuggateway.php** on line **23**  


I searched a lot of sites to find the answer for this problem, like these two <http://tinyurl.com/nhs7f8>   
<http://tinyurl.com/nwbn63> But it seemed that these sites did not have the answer. First I thought this would help: After starting the XAMPP Server, 1. in XAMPP Control Panel switch to PHP Version   
2\. Check the Active PHP Version   
3\. Incase Active PHP Version shows as PHP 4   
4\. click on Activate PHP 5.2.6   
5\. switch to XAMPP tab   
6.click on Start option for All Components. But it did not help. Then I thought it would be the php_domxml.dll extension, but it was already commented out. But finally I found out what it was. The Zend studio together with Flex, can not operate from sub directory outside the root. So my test site was <http://localhost/flextest> And when I set the server in the Flex Project properties to  <http://localhost/> it worked. So if you got the error like above, and nothing seems to help, just set the server to you root in localhost. No other work around yet.