title: A Nerd's guide to a Vagrant Galaxy
link: http://vandersluijs.nl/blog/2014/11/a-nerd-guide-to-vagrant-galaxy.html
author: tvdsluijs
description: 
post_id: 32
created: 2014/11/08 20:22:00
created_gmt: 2014/11/08 20:22:00
comment_status: open
post_name: a-nerd-guide-to-vagrant-galaxy
status: publish
post_type: post

# A Nerd's guide to a Vagrant Galaxy

Captain James T. Kirk used to Say: 

> To boldly go where no one has gone before.

Well... where you didn't go before and about to explore is a strange new world called Vagrant. So what is [Vagrant](https://www.vagrantup.com/) in short? Vagrant is free and open-source software for creating and configuring virtual development environments. Welcome to my beginners guide! 

## Why use Vagrant

So.. a couple of years ago some developers talked about vagrant. About how "easy" it was to install and use your development environment. But we have our development server, or hell I can install Wamp on my windows machine! Why would I need a Vagrant environment? How wrong I was on Vagrant. Years went by and I had more and more problems with my online development server and well... installing WAMP on a Mac..... yeah..... So more and more developers around me started using Vagrant. And I didn't, and problems kept piling up. Indexing on an IDE was so slow on the ssh mounted drive that I started to rsync files from my disk to the developers server. When rsync's failed... well guess what... nothing worked. Working from home when the VPN is down.. or working without internet... impossible! Yes you can use WAMP on your Mac or Windows machine.... but what will never be the same as your test, accept and live server. And that is where Vagrant comes in. You can create a server on your own machine, with local development website (or whatever) files, with the same OS and webserver version as your live webserver. If you need more convincing go to [Why Vagrant](https://docs.vagrantup.com/v2/why-vagrant/index.html)

### Where to start with Vagrant

You can create as much vagrant environments as you like. Each one with it's own purpose. You can create vagrants for projects written in programming languages such as PHP, Python, Java, C# and JavaScript. Hell it even supports [Docker](https://www.docker.com/) containers, but let's not go there for today. Today we are going to take the easy ride. We are going to have a Vagrant environment up and running within 5 minutes! The first thing you have to do is install virtualization software like: 

    * [Oracle VM VirtualBox](https://www.virtualbox.org/)
 
    * [VMware Fusion (OSX)](https://www.vmware.com/support/fusion/faq/downloading.html)
 
    * [VMware Player (Windows)](http://www.vmware.com/products/player/)
I like the VM Virtualbox by Oracle but it's what ever suits your needs. When the virtualization software is installed go to [Vagrant Cloud Boxes](https://vagrantcloud.com/discover/featured). Here you can find ready build environments. Just search for a environment you would like to have for your development. I choose the Centos/php/mysql environment named : smallhadroncollider/centos-6.4-lamp So go where you want to start your project and type in a console / terminal: vagrant init smallhadroncollider/centos-6.4-lamp Or if you have choosen another build type that build behind your **vagrant init**. Now a _Vagrantfile_ is downloaded on to your system. So, ready to spin up your environment for the first time? _The first time will take longer as the complete server package will be downloaded, unpacked and installed as a server._ Here we go! Type in a console / terminal: vagrant up You will see lot's and lot's of things happen in the console. The compete server package will be downoaded, unpacked, installed and configured by the _Vagrantfile_. After 3 minutes or so, depending on your internet speed and your computer CPU the environment will be ready to go! 

> Yes its done! It's finished! It's ready to develop!!

So now what? Well you could do vagrant ssh in your console or terminal to connect to ssh to your environment. But that is just lame! You want to get some your html or php or what ever website files on to it, right!?!?! First let's search for the www folder on the vagrant server. So if you didn't all ready vagrant ssh do that now and lets search on the virtual server for the www folder. On my centos its in **/var/www/public/**. Most of the time it is either **/var/www/public/** or **/var/www/** Found it? Copy the whole path to a texteditor (notepad eg) you will need it later. Okay then, lets spin down the vagrant server. Type vagrant halt into your console or terminal. The system stops! _This can take seconds to minutes, depending on your computer cpu_ Now open the _Vagrantfile_ in a texteditor like notepad or thru nano. Find the line that start with #config.vm.synced_folder Change that line to config.vm.synced_folder "src/", "/var/www/public/" So remove the _dash_ (#) and after _config.vm.synced_folder_ type your local folder where your current web development files are, you can use "" for the current folder. And in the second part put the copied folder path from the virtual machine. _If you don't have any files yet to display or to work with, just create a simple index.html file on your local machine in the folder where the Vagrantfile is_ Now search in _Vagrantfile_ for the line that starts with #config.vm.network "private_network", Change that line to config.vm.network "private_network", ip: "192.168.33.10" Okay save the file. And type vagrant up in your terminal or console. The server is now configured with 192.168.33.10 as it's local IP address and mounts your local folder to it's virtual web folder. Anything you change now in your local web folder will automaticly apear in the mounted folder. Okay... open up a browser and go to <http://192.168.33.10>. Do you see your index.html or website. If you want to stop with this vagrant server or your closing your Mac or Windows machine, dont forget to close your vagrant environment first. vagrant halt 

### Some good things to know!

Using mysql? login with : root/root Wanna vagrant sudo? pw : vagrant Wanna stop using this Vagrant environment? Just type vagrant destroy And it's all gone! (not your own webfiles as they are your local drive!) 

### Customised Vagrant environment

Well that's all for today folks. Next time I'll explain to you how to create a completly customised Vagrant environment.