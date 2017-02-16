title: Install XP on Vista PC
link: http://vandersluijs.nl/blog/2007/10/install-xp-on-vista-pc.html
author: tvdsluijs
description: 
post_id: 527
created: 2007/10/18 13:10:00
created_gmt: 2007/10/18 13:10:00
comment_status: open
post_name: install-xp-on-vista-pc
status: publish
post_type: post

# Install XP on Vista PC

Microsoft Vista Sucks.... Well not completely, but it is not even a near finished (and bugfree) product I think.   
  
I think Microsoft felt the new Ubuntu versions breathing down the neck... and with all the articles about the vista delays, they just had to give out this Vista (Millenium / ME) version.   
  
I have a Dell Computer... an Dimension 9200 to be exact.   
  
And Vista is on it. I installed Vista a dozen times, but it just doesnt work right.   
I tried to install XP, but this ends in a BSOD (Blue Screen Of Death).   
I tried to install Ubuntu... well Ubuntu did not like my Dimension.   
  
More and more people are trying to downgrade from Vista to XP. Hell a lot of consumer companies are telling people to downgrade.   
  
But... I cann't downgrade..... Well to be honest... I could not downgrade.... And now I can ! Yes You CAN !   
  
This is THE simple Solution (might even work on a Non Dell computer):   
  
Step 1) Boot the Bios (On a DImension 9200, tap F12 immediately after turning on the computer)   
  
Step 2) Go to "Device Setup"   
  
Step 3) Scroll down to the "Sata" Heading and go to "Sata Operation."   
  
Step 4) Change the setting to "RAID Autodetect/ATA."   
  
Done. Now reformat and install Windows XP (Or Linux, or what have you) without a hitch.   
  
This process should work on any new computer that comes with Raid Autodetect/ATA turned off.   
  
Good Luch !!!   
  
Still having troubles with BSOD ? You might need to load the Dell Raid drivers when installing XP.   
  
First, try to see if your computer let you load driver from USB disk (you might have to turn it on in bios).   
If you cann't load them from a USB disk, and you don't have a floppy drive, try to slipstream your XP with the right drivers.   
  
You can read the How To [here](http://www.maximumpc.com/article/How-To--Slipstream-your-XP-installation) .   
2007-10-18 10:09:06