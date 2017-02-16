title: Installation and configuration S3CMD Centos
link: http://vandersluijs.nl/blog/2015/01/installation-and-configuration-s3cmd.html
author: tvdsluijs
description: 
post_id: 25
created: 2015/01/27 19:43:00
created_gmt: 2015/01/27 19:43:00
comment_status: open
post_name: installation-and-configuration-s3cmd
status: publish
post_type: post

# Installation and configuration S3CMD Centos

At work and home (for my [nopnop.nl](http://nopnop.nl/) site) I needed a way to backup a server (mysql / mongodb and files). I could just zip it and ftp it to my Synology at home... but.... why not save the cloud server files on another cloud like AWS Amazon! So I found the [S3CMD](http://s3tools.org/s3cmd) tools for connecting to my AWS Bucket. Installation was not very easy. Which means that "yum install s3cmd" on CENTOS just did not work. So I searched the internet for the solution and created a complete installation with python 2.7 and configuration. 

## S3CMD Installation

This will mostly likely work on any older distro where s3cmd is stuck at 1.0.x. What you need is the multipart upload support that is in version 1.1.x and greater. The strategy for CentOS 5.x is that you don't want to break the Python 2.4 base install as admin features within CentOS 5.x rely on it. Therefore, we want to create a self contained Python 2.7 installation. 

### 1\. Remove s3cmd package

 
    
    
    yum remove s3cmd

 

### 2\. Install at least Python 2.7.

IMPORTANT: MAKE SURE TO USE "make altinstall" in the last step 
    
    
    wget http://python.org/ftp/python/2.7.3/Python-2.7.3.tar.bz2 
    
    tar xf Python-2.7.3.tar.bz2  
    
    cd Python-2.7.3 ./configure --prefix=/usr/local  
    
    make && make altinstall 
    
    

### 3\. Download and compile latest s3cmd against Python 2.7

 
    
    
    wget -O v1.5.0-alpha3.tar.gz https://github.com/s3tools/s3cmd/archive/v1.5.0-alpha3.tar.gz 
    
    tar xvzf v1.5.0-alpha3.tar.gz 
    
    cd s3cmd-1.5.0-alpha3/ 
    
    python2.7 setup.py install
    
    

### 4\. Reload shell and test
    
    
    exec bash
    
    s3cmd --version
    
    

**Outcome**: 
    
    
    s3cmd version 1.5.0-alpha3

### 5\. Configure s3cmd

In order to configure s3cmd we would required Access Key and Secret Key of your S3 Amazon account. Get these security keys from aws securityCredentials page. If will prompt to login to your amazon account. After getting key files, use below command to configure s3cmd. 
    
    
    s3cmd --configure

Will result in: 
    
    
    Fill in the Credentials as known for your server on Amazon.
    
    Key Id: [KEY ID]
    
    Secret Access Key: [SECRET ACCESS KEY]
    
    Password: [PASSWORD]
    
    Path to GPG program [/usr/bin/gpg]: [ENTER]
    
    Use HTTPS protocol [No]: No (no encryption needed as files are already encrypted)
    
    HTTP Proxy server name: [ENTER]
    
    

 
    
    
    Test access with supplied credentials? [Y/n] Y

**Outcome:**
    
    
    Please wait, attempting to list all buckets...
    
    Please wait...
    
    Success. Your access key and secret key worked fine :-)
    
    
    
    Now verifying that encryption works...
    
    Success. Encryption and decryption worked fine :-)
    
    

**Or !! Outcome:**
    
    
    Please wait, attempting to list all buckets...
    
    WARNING: Retrying failed request: /?delimiter=/ ([Errno 32] Broken pipe)
    
    WARNING: Waiting 3 sec...
    
    Success. Your access key and secret key worked fine :-)
    
    
    
    Now verifying that encryption works...

 
    
    
    Success. Encryption and decryption worked fine :-)
    Save settings? [y/N] Y
    

All done! Now you can connect easily to your own amazon bucket! With special thanks to these sites : [minimul.com](http://minimul.com/install-the-latest-s3cmd-on-centos-5.html) and [tecadmin.net](http://tecadmin.net/install-s3cmd-manage-amazon-s3-buckets/)