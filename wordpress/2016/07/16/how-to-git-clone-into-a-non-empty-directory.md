title: How to git clone into a non-empty directory
link: http://vandersluijs.nl/blog/2016/07/how-to-git-clone-into-a-non-empty-directory.html
author: tvdsluijs
description: 
post_id: 3107
created: 2016/07/16 13:52:53
created_gmt: 2016/07/16 13:52:53
comment_status: open
post_name: how-to-git-clone-into-a-non-empty-directory
status: publish
post_type: post

# How to git clone into a non-empty directory

I'm building a few new projects. Some in just plain good old PHP and some with a nice framework like Slim 3. I've got a good working shared hosting solution at [Vimexx](https://www.vimexx.nl/affiliate/1730) and the only problem I have that when I git clone in a usually non empty directory I get these nice errors. So here are the 5 simple steps to git clone in to that non empty folder! So you want to git clone in to that folder where there is already some files? Let me guess. When you do: 
    
    
    git clone ssh://user@host.com/home/user/private/repos/project_hub.git ./

You get a: 
    
    
    Fatal: destination path '.' already exists and is not an empty directory.

So what are the options here? If you do 
    
    
    git help clone

You get: 
    
    
    Cloning into an existing directory is only allowed if the directory is empty.

No Shit! Sherlock! So should you remove or move all the files and folders within the folder you want to clone into? No! Don't worry! I've got you're back! The solution to Git Clone into a non empty folder is simple! 

## Solution to Git Clone into a non empty directory

The solution is very simple! Actually there are two solutions. Just see which one suits you! 
    
    
    git init
    git remote add origin PATH/TO/REPO
    git fetch
    git checkout -t origin/master

or 
    
    
    git init .
    git remote add -t \* -f origin <repository-url>
    git checkout master

## Git Clone

What is Git Clone? Git Clone, Clones a repository into a newly created directory, creates remote-tracking branches for each branch in the cloned repository, and creates and checks out an initial branch that is forked from the cloned repository’s currently active branch. After the clone, a plain git fetch without arguments will update all the remote-tracking branches, and a git pull without arguments will in addition merge the remote master branch into the current master branch. Executing the command git clone git@github.com:whatever creates a directory in a current folder named whatever, and drops the contents of the git repo into that folder. Use a dot (.) behind the command to place the files directly into the current folder.

## Comments

**[Bob](#6371 "2016-07-19 08:41:17"):** Thanks, this is exactly what I was looking for. Just wondering, is the "… *pain* good old PHP…" in the second sentence a typo or a subtle dig at PHP?

**[Theo van der Sluijs](#6372 "2016-07-19 09:37:04"):** Hi Bob, Ha ha ha ha no was a typo. It should be plain good old php.... but sometimes it's a real pain :-) ha ha ha ha Thank you for pointing out my mistake!

