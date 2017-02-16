title: Flex Feeder
link: http://vandersluijs.nl/blog/2008/02/flex-feeder.html
author: tvdsluijs
description: 
post_id: 518
created: 2008/02/15 06:00:00
created_gmt: 2008/02/15 06:00:00
comment_status: open
post_name: flex-feeder
status: publish
post_type: post

# Flex Feeder

Nu wordt het echt interessant.  
  
Ik heb zojuist een rss reader gemaakt met Flex.  
  
Was niet echt ingewikkeld, maar ja het ziet er leuk uit. Toch ;-)  
  
  
  
En de code voor al dit geweldigs is :  
  
  
  
  
  
  
[Bindable]  
public var feedlist:Array = [{label:”Maak een keuze”, data:”“},  
{label:”Tweakers”, data:”<http://feeds.feedburner.com/tweakers/mixed”}>,  
{label:”Nu.nl”, data:”<http://www.nu.nl/deeplink>_rss2/index.jsp?r=Algemeen”},  
{label:”Webwereld”, data:”<http://feeds.webwereld.nl/webwereld”}>,  
{label:”Automatiseringgids”, data:”<http://automatiseringgids.sdu.nl/ag/rss/rss>_nieuws.jsp”}  
];  
[Bindable]  
  
public var selectedItem:Object;