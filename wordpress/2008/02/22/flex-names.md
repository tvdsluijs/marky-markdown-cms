title: Flex Names
link: http://vandersluijs.nl/blog/2008/02/flex-names.html
author: tvdsluijs
description: 
post_id: 517
created: 2008/02/22 20:24:00
created_gmt: 2008/02/22 20:24:00
comment_status: open
post_name: flex-names
status: publish
post_type: post

# Flex Names

Okay … okay… tot nu toe was het natuurlijk allemaal een beetje freubelen in Adobe Flex.  
  
Maar ik wil voor dat ik bij NL for Business (NL4B) ga werken toch wel iets meer kunnen dan wat tekst laten zien in Flex.  
  
Natuurlijk krijg ik een opleiding binnen NL4B , maar het is wellicht handig als ik al iets kan met Flex. Overigens moet ik krijg ik ook opleiding in SAP en Adobe Dynamic Forms, maar dat is niet zo makkelijk te installeren.  
  
Maar goed,  
  
Hierbij dus mijn eerste PHP / FLEX / JSON applicatie.  
  
  
  
En hier dan die geweldige scripts :  
  
PHP File : framework Joomla!  
  
{geshi lang=”php” lines=”true”}$sql = “SELECT * FROM #__flexnames”;  
$database->setQuery( $sql );  
if (!$database->query()) {  
echo $database->stderr();  
return false;  
}   
  
$rows = $database->loadObjectList();  
  
Echo json_encode($rows);   
{/geshi} } Flex code :  
  
  
  
  
import mx.rpc.events.ResultEvent;  
import mx.collections.ArrayCollection;  
import com.adobe.serialization.json.JSON;  
  
[Bindable]  
private var dataArray:ArrayCollection;  
  
private function initDataGrid():void  
{  
dataArray = new ArrayCollection();  
getData.send();  
}  
  
private function getPHPData(event:ResultEvent):void  
{  
var rawArray:Array;  
var rawData:String = String(event.result);  
rawArray = JSON.decode(rawData) as Array;  
dataArray = new ArrayCollection(rawArray);  
}