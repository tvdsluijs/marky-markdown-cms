title: Flex Auto Select Combobox
link: http://vandersluijs.nl/blog/2009/02/flex-auto-select-combobox.html
author: tvdsluijs
description: 
post_id: 440
created: 2009/02/13 13:00:00
created_gmt: 2009/02/13 13:00:00
comment_status: open
post_name: flex-auto-select-combobox
status: publish
post_type: post

# Flex Auto Select Combobox

Did you ever wanted to auto select an item from a Combobox within flex ?  
Just try, it aint gonna happen. Yes yes, if you use the selectedItem or index you can. But what if you have a arrayCollection to fill the Combobox and you want to select an item that is not standard selectedItem or Index ?  
Than you have a problem. Or not ?  
  
  
When working on the Flex project at a big Insurrance / Bank Company I had this problem. We got a big load of arrayCollections from a WSDL and wanted to fill and select comboboxes with this.  
But we just could not get a selection on the combobox when we wanted to retreive and show the information saved by the user.  
So Mark Huisman (a former [NL4B](http://www.nl4b.nl/)   / NL for Business colleague) tweaked the combobox to a version where we could select one that hat its data outside the (label / data) selectedItem / index range.  
Let's say you have a ArrayCollection named "Foos" with the following fields: - VData   
\- VName   
\- VNumber   
\- VClass  
And you have a textfield or other dataprovider where you want to put de auto select to that is called "DValue".  
You want to show VName for the Gui, and use VNumber to save into dbase. Now you want to autoselect on VData. Difficult? No!  

    
    
    package com.controls  
    {  
      import mx.collections.IViewCursor;  
      import mx.controls.ComboBox;  
      
      public class FindSelectedItemComboBox extends ComboBox  
      {  
      
        public function FindSelectedItemComboBox()  
        {  
          super();  
        }  
      
        // value is the value you input that you want to search for.  
        override public function set selectedItem(value:Object):void  
        {  
          super.selectedItem=value;  
          if (value != null && selectedIndex == -1)  
          {  
            /** do a painful search */  
            for each(var item:Object in this.collection)  
            {  
            //Vdata is the Arraycollection item you whant to search in.  
            //So VData is the name of the item within the ArrayCollection  
              if (item.VData == value)  
              {  
                selectedItem=item;  
              }  
      
            }  
          }  
        }  
      }  
    }  
    

  
And now for the combobox.  



  
Special thanxs to Mark Huisman who made this piece of code.