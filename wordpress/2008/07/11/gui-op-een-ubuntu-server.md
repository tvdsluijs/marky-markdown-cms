title: GUI op een Ubuntu Server
link: http://vandersluijs.nl/blog/2008/07/gui-op-een-ubuntu-server.html
author: tvdsluijs
description: 
post_id: 504
created: 2008/07/11 21:22:00
created_gmt: 2008/07/11 21:22:00
comment_status: open
post_name: gui-op-een-ubuntu-server
status: publish
post_type: post

# GUI op een Ubuntu Server

Dus je wilt echt een GUI op een Ubuntu Server ?  
  
Tja, dan moet je wel zoals mij zijn.  
  
Je weet wel wat van Linux maar niet genoeg om een server helemaal op te zetten en te onderhouden.  
  
Met de Ubuntu Client heb je wel al genoeg ervaring en je houdt er gewoon van om die muis te gebruiken.  
  
Ja, ik ben het met je eens dat GUI's het leven van een mens wel makkelijker maken.  
  
  
  
Goed, maar je moet 1 ding weten, een GUI gebruikt veel ruimte. Dus als je een servertje hebt waar je niet genoeg HDD ruimte op hebt zitten, doe dit dan NIET.  
  
Open een Putty sessie naar je server (of log gewoon in op je server) en geef de volgende regel in.  
  
  

    
    
    sudo apt-get install ubuntu-desktop

  
Oh, je wilt ook nog dat het automatisch start als je server opstart. Nee hoor je bent helemaal niet veeleisend  
  
   
  
  

    
    
    sudo nano /etc/rc.local

  
En voeg toe:  
  
  

    
    
    sudo startx

  
rc.local zal er dan uit zien zoals (kan dus anders zijn)  
  
  

    
    
    #!/bin/sh -e  
    #  
    # rc.local  
    #  
    # This script is executed at the end of each multiuser runlevel.  
    # Make sure that the script will "exit 0" on success or any other  
    # value on error.  
    #  
    # In order to enable or disable this script just change the execution  
    # bits.  
    #  
    # By default this script does nothing.  
    sudo startx  
    exit 0