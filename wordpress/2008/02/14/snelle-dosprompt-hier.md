title: Snelle DosPrompt Hier !
link: http://vandersluijs.nl/blog/2008/02/snelle-dosprompt-hier.html
author: tvdsluijs
description: 
post_id: 520
created: 2008/02/14 20:03:00
created_gmt: 2008/02/14 20:03:00
comment_status: open
post_name: snelle-dosprompt-hier
status: publish
post_type: post

# Snelle DosPrompt Hier !

Dus… je werkt met verkenner ? (eigenlijk hoop ik dat je met Total Commander werkt, das veel beter)  
  
En je wil eigenlijk waar je zit in je directory structuur direct een dos prompt hebben zonder eerst ….  
  
Start -> RUN -> CMD -> D: -> cdprogram files -> cdnog een dir -> cdnogeendir  
  
Nou dan heb ik DE oplossing voor je  
  
DOS PROMPT HIER / DOS PROMPT HERE  
  
Open je notepad en plak daar de volgende code in :  
  
REGEDIT4  
  
  
[HKEY_CLASSES_ROOTDirectoryShellDosPrompt]  
  
@="Run MS-DOS Prompt here"  
  
[HKEY_CLASSES_ROOTDirectoryShellDosPromptCommand]  
  
@="Cmd /k CD "%L" "   
Sla het op je buroblad op als doshere.reg  
  
Dubbel klikken, ja je wilt het in je register verwerken … en …. klaar.  
  
(wel even herstarten met de PC)  
  
Rechtermuisknop op de verkenner directory oftewel de directory waar je de dosprompt wil zien…..  
  
Voilá !