title: Drop down list text value in Livecycle Designer
link: http://vandersluijs.nl/blog/2009/11/drop-down-list-text-value-in-livecycle.html
author: tvdsluijs
description: 
post_id: 364
created: 2009/11/13 18:11:00
created_gmt: 2009/11/13 18:11:00
comment_status: open
post_name: drop-down-list-text-value-in-livecycle
status: publish
post_type: post

# Drop down list text value in Livecycle Designer

Last week I had to get the chosen item from a drop down list in a PDF Livecycle Designer Form. Easy enough you should think. But it did not work as I thought it would work. As you would think the : _$.rawValue_ would get you the item you want. But I did not want to have the item value but the text value.  If you put something like this into a drop down field. 1 : Amsterdam   
2 : Rotterdam   
3 : Den Haag   
4 : Leiden   
5 : Wolphaartdijk   
6 : Goes And you pick like number 3, with a $.rawValue you get 3 as the value back. But I want “Den Haag” as a return value. Simple you use _$.formattedValue _ And that will give you  Den Haag !