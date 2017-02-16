title: Disable Adobe Reader Toolbar in Webdynpro
link: http://vandersluijs.nl/blog/2009/11/disable-adobe-reader-toolbar-in.html
author: tvdsluijs
description: 
post_id: 365
created: 2009/11/12 21:20:00
created_gmt: 2009/11/12 21:20:00
comment_status: open
post_name: disable-adobe-reader-toolbar-in
status: publish
post_type: post

# Disable Adobe Reader Toolbar in Webdynpro

Last week I was searching for a way to disable the Toolbar of the Adobe Reader in a Webdynpro application. I needed this when working for a [NL 4 Business](http://www.nl4b.com/) customer  
SAP provided a way in the Form but that did not seem to work in Livecylce 8.0.  
After a lot of searching on the Net and trying a lot of code I finally found a way to Hide / Disable the Toolbar of the Adobe Reader in the SAP Webdynpro application.  
  
It is actually very easy if you know it. ;-)  
You can disable the ToolBar of Interactive Form by writing a few lines of Code in WDDOMODIFY Method of the used View.  
Add the Following Lines of Code in the WDDOMODIFY Method in the view.  
[code]  
DATA: LR_INTERACTIVE_FORM type ref to CL_WD_INTERACTIVE_FORM,  
LR_METHOD_HANDLER type ref to IF_WD_IACTIVE_FORM_METHOD_HNDL.  
LR_INTERACTIVE_FORM ?= VIEW->GET_ELEMENT( 'INTERACTIVE_FORM_UI_ELEMENT_NAME' ).  
LR_METHOD_HANDLER ?= LR_INTERACTIVE_FORM->_METHOD_HANDLER.  
LR_METHOD_HANDLER->set_hide_toolbars( abap_true ).  
[/code]  
  
The user can reactivate the Adobe Acrobat Reader toolbar by pressing F8.