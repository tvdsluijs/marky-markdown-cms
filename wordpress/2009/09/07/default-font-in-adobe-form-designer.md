title: Default Font in Adobe Form Designer
link: http://vandersluijs.nl/blog/2009/09/default-font-in-adobe-form-designer.html
author: tvdsluijs
description: 
post_id: 391
created: 2009/09/07 07:39:00
created_gmt: 2009/09/07 07:39:00
comment_status: open
post_name: default-font-in-adobe-form-designer
status: publish
post_type: post

# Default Font in Adobe Form Designer

I see a lot of questions on the web about setting a default font in Adobe’s Form Designer. Like this one: 

> **How can I set the  default font for fields in Forms Wizard?   
**I know that I can right click on a form field, and set the format for future fields based on that field's appearance, but when I run the Forms Wizard on a doc the fields all end up as Helvetica. Is there someway to change this behaviour, or, failing that, is there an easy way to change the appearance of all the fields in a file after the fact? I know I could do it one by one, but that gets a little boring. 

[Adobe Forums](http://forums.adobe.com/thread/300264) I also see a lot of not really working solutions about setting the font. Like Search Replace in the XML Source or select all fields where you want to change the font and change them. But there is a solution !  If you like to use an other font like me on a text object, just create your own objects in the Library palette. So you can drag your own text objects onto the form. To do this, create a new form, drag a  text object onto it, use the Font palette for your own font and size that you want as default then drag it back to the Library palette's Standard tab (you can also create your own Tab). You'll  get a dialog where you can specify a new name for this text object. Specify the same name and you'll get the opportunity to replace the text field in the Library palette with this customized version. If you have more objects you want to make your own, just create a new panel within the library and save your customized objects in it rather than overwriting the standard ones.