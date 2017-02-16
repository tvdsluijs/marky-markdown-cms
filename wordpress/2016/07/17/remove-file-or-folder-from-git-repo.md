title: Remove file or folder from Git Repo
link: http://vandersluijs.nl/blog/2016/07/remove-file-or-folder-from-git-repo.html
author: tvdsluijs
description: 
post_id: 3115
created: 2016/07/17 11:44:41
created_gmt: 2016/07/17 11:44:41
comment_status: open
post_name: remove-file-or-folder-from-git-repo
status: publish
post_type: post

# Remove file or folder from Git Repo

So you've got some file in your GIT Repo that do not belong there? Bummerrrrr every time you git pull your Git repo gives you a hard time with these files! Do you want to merge? These files will be erased  or what ever error message you get! You don't want these files in your Repo anymore and putting them in the .gitignore does not help. So? How do you remove a file, files or a folder from you Git repo? So, I'm using composer, which creates a vendor folder and a composer.lock file. And most of the time when I push my stuff to Git these files and this folder gets pushed to the repo to. Well, let me tell you a little something. Those files do not belong in your REPO! The only composer file needs to be put in your Git repository is the composer.json file! But if it's not the composer created files, it could also be a config.php (don't want that in your repo either!) some log files or other temp stuff that don't belong in the git repo. But putting it into your .gitignore file does not help anymore! You first have to remove it from your codebase then put it in the .gitignore file and then add the files again. Oh man! Is there no easier way? YES THERE IS! 

## Solution for removing files or folder from Git Repo

So here are 3 easy steps for removing files or folders from your Git repository without removing them from your own codebase. So lets say you want to remove the vendor folder and the composer.lock from GIT. Not from your codebase. Follow these 3 steps: 

  * Add the files to the .gitignore
  * Remove the files/folders from git with a simple command
  * Do a git add / commit and push!
DONE! 

### Add the files to the .gitignore

So adding files to git the .gitignore is simple. Open .gitignore with nano or a text editor or PHPStorm Add lines like these : 
    
    
    vendor/
    vendor/*
    composer.lock
    

where folder/ stands for a folder, folder/* stands for all files within a folder and file.ext stands for a filename and its extention. Save .gitignore Step one done! 

### Remove the files/folders from git with a simple command

So let's remove the file, files or folder from git! It's one simple command 
    
    
    git rm -r --cached folderName/

Where foldername stands for a folder like : vendor/ Or when you use a file you can 
    
    
    git rm -r --cached filename.ext

Remove all the folders and files you like to see go from Git. Done! 

### Do a Git add / commit and push!

So, now you are ready to push these changes to git. Do a simple 
    
    
    git add .

and 
    
    
    git commit -m 'lets remove those darn files folders'
    

and 
    
    
    git push

All done! Now when you do a Git Pull on your live system, don't forget that files you removed from git will not appear in your live environment. So you need to do stuff like Composer update and stuff. Have fun!!

## Comments

**[Russ](#13876 "2016-11-11 18:32:24"):** You should commit your composer.lock file to git so that other developers can run composer install and get the exact same dependencies as you.

**[Theo van der Sluijs](#13948 "2016-11-13 09:19:33"):** You do mean the composer.json file right?

**[Russ](#14044 "2016-11-14 11:39:14"):** No, but that should be committed too. If you only commit composer.json but not composer.lock, and another developer checks out your project, they will run composer install, but they might get different dependencies than you (because they do not have your lock file). You have to commit the lock file so that others can install the exact same dependencies. This is because composer.json allows you to specify a wide range of versions, and composer will try to work out the best fit for you, but if new releases are made between you running composer install and someone else running it, the versions composer delivers may be different. If a composer.lock file is present though, the other developer will get the exact same versions as you got, even if new releases that fit your composer.json requirements have been made since.

