title: Work locally fast on a mounted drive in Netbeans / Eclipse / PHPStorm
link: http://vandersluijs.nl/blog/2013/06/work-locally-fast-on-mounted-drive-in.html
author: tvdsluijs
description: 
post_id: 100
created: 2013/06/19 21:40:00
created_gmt: 2013/06/19 21:40:00
comment_status: open
post_name: work-locally-fast-on-mounted-drive-in
status: publish
post_type: post

# Work locally fast on a mounted drive in Netbeans / Eclipse / PHPStorm

So you've got a big project you're working on and got a good development environment and your IDE handles stuff through a mounted drive!  
  
And guess what.... editing, saving, committing, updating is slow as a snail! It's not your IDE you should worry about! No .... it's your mounted drive!  
  
  
But wait! The mounted drive, with your files is to your development server! The development server every colleague works on! The development environment that comes the closed to your test, accept and live server!  
  
You created this development server so you did not had to set up all kinds of VM-servers for each developer on their own windows/mac/linux environment. Well, that was not the big issue, but keeping all the vm's to the same level with the same updates is the problem.  
  
So, you've got it all worked out. But it just doesn't work! It's slow! Mounted drives are slow! Let me tell you, I tried every IDE there is. And most of the complaints I've read wasn't about that the IDE missed functions or could not tell the classes from each other, not that they could not find the functions.... no the main complaint was that they were S.L.O.W.!  
  
Now Eclipse is SLOW! I don't know how they managed to get this great IDE from slick to totally fat but it's like you're pushing a whale through a watertube! It's SLOW! People get used to it.  
  
So I used them all. Started at Eclipse (it's SLOW!) , going to Netbeans (looked SLOW!), then to Notepad++ (well that obviously doesn't work) and then I thought well what the Frack I'm gonna buy the best thing there is! So I bought PHPStorm!  
  
I installed it, imported my projects. And guess WHAT! It was SLOW!! That was 90 euro's nicely spend, NOT!  
  
Indexing took like two decennia, the time it took for updating on SVN I could do a repaint of my whole house! During the updating of the project from SVN I two knitted sweaters!  
  
And then I saw the light! Well actually PHPStorm showed me the light!![network_mounted_directory_may_be_slow_phpstorm](/wp-content/uploads/2013/06/network_mounted_directory_may_be_slow_phpstorm-300x37-300x37.png)  
  
  
  
So... working on mounts is slow? What? I've got a 1Gigabit Network connection, and the files are on SSD's!! Should I go for fiber optic?  
  
So I talked to some of my colleagues and one told me that during the work he did outside the company he worked locally on a mounted drive!  


> Say What?

  
Yes work locally on a mounted drive! And he told me how he did this.  
  
All the project files where local on this laptop, and with rsync he synced the files (one way) the the mounted drive!  
  
Al the indexing, svn updates, svn commits he did locally and then the rsync synced the files back to the mounted drive! Instantly! So then he pressed save, rsync instantly synced the file by using SSH and he could test his changes on the development server.  
  
So I went on a small adventure! Within PHPStorm there's a feature called "New Project from Existing Files Wizard" that I wanted to try. It's very easy! PHPStorm just copies all the files (except for SVN and some other files or folders) to your local drive and with some preference adjustments PHPStorm puts the changes back to your mounted drive.  
  
![phpstorm](/wp-content/uploads/2013/06/phpstorm-300x200-300x200.png)Now... I hope you see where it goes wrong! It doesn't copy the SVN files! PHPStorm thinks that you want to keep updating / committing on the mounted drive! But I don't want that!  
  
I copied the SVN folders back to my local drive, but that did not work either. Cause I left out a lot of folders, SVN thought hey where are those files? And it started updating many many files.  
  
Okay... that doesn't work... not the PHPStorm way. But it had to work.. somehow!  
  
My colleague told me I had to start using rsync!  
  
Okay, this is what I did. I SVN checked-out my project to my local drive! Then I searched for a good Mac tool for syncing, and come up with [Dropsync](http://www.mudflatsoftware.com/dropsync.html)!  


> DropSync can be used to push local changes to a webserver, or make a local copy of a website's files.

  
It's a left to right or right to left rsync tool! It works great! You can tune it all the way like you would using rsync! You can leave out certain files or folders. I let Dropsync sync two projects from my localdrive to my mounted drive. It's done over SSH, it's fast and reliable!  
![MainScreen_Syncing_500](/wp-content/uploads/2013/06/MainScreen_Syncing_500-300x205-300x205.png)If the connection is lost, you can always manually do a local to mount sync!  
  
SVN updates and SVN commits are done on your local drive! Superfast! You can do it with PHPStorm or with any versioning tool you like to use.  
  
  
  
Indexing in PHPStorm is superfast! PHPStorm is fast! That was 90 euro's nicely spend, YES it  actually was!!!  
  
So there you go! It's easy, with a little bit of work up front you've got a super fast, super stable project in your own IDE!  
  
And yes, PHPStorm is a great IDE! I work with it every day!  
  
Questions? Just ask!  
  
This works with the following IDE's to my knowledge! It's SVN tested! But I guess it also works with Git!  
  
[PHPStorm](http://www.jetbrains.com/phpstorm/)  
Smart PHP IDE with refactorings, code completion, on-the-fly code analysis and coding productivity orientation. For €89 you've got a Personal License. I bought it, and I love it!  
  
[Eclipse](http://www.eclipse.org/)The PHP IDE project delivers a PHP Integrated Development Environment framework for the Eclipse platform. It's free,  I liked it a long time but it was very very slow and uses a lot of resources.  
  
[Netbeans](https://netbeans.org/)  
NetBeans is an integrated development environment (IDE) for developing primarily with Java, but also with other languages, in particular PHP