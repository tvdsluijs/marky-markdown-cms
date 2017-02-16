title: Flex PHP UTF8 Problem solved
link: http://vandersluijs.nl/blog/2010/10/flex-php-utf8-problem-solved.html
author: tvdsluijs
description: 
post_id: 270
created: 2010/10/03 21:50:00
created_gmt: 2010/10/03 21:50:00
comment_status: open
post_name: flex-php-utf8-problem-solved
status: publish
post_type: post

# Flex PHP UTF8 Problem solved

So you want to connect to your MySQL database with Flex and PHP tru AMF but you are getting these UTF8 errors?  
If you write you own php files and you have an UTF8 MySQL database you can get nasty errors about UFT8.  
The error you get can look like this :  
  
  
  


> _InvocationTargetException:There was an error while invoking the operation. Check your operation inputs or server code and try invoking the operation again._  
_Reason: An error occured while reading response sent by server. Try encoding the response suitably before sending it. e.g. If a database column contains UTF-8 characters then use utf8_encode() to encode its value before returning it from the operation._  


  
There is a very simple sollution for this error in flex when generating dataservices.  
Add this little piece of code to your own build classes and all is good.  
public function utf8_encode_array($array)   
{   
$retArray = Array ();   
  
foreach($array as $keyA => $row){   
foreach($row as $keyB => $value)   
{   
$retArray[$keyA][utf8_encode ($keyB)] = utf8_encode ($value);   
}   
}   
return $retArray;   
}[/php]  
Now for your result form the MySQL DB. Just before retuning it to Flex do this.  
[php]$Utf8Result = $this->utf8_encode_array($result);[/php]  
Just return the $Utf8Result....  
And …fixed !