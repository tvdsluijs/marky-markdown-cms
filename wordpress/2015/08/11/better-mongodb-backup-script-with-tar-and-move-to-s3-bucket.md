title: Better MongoDB backup script with Tar and move to S3 Bucket
link: http://vandersluijs.nl/blog/2015/08/better-mongodb-backup-script-with-tar-and-move-to-s3-bucket.html
author: tvdsluijs
description: 
post_id: 1155
created: 2015/08/11 11:52:12
created_gmt: 2015/08/11 11:52:12
comment_status: open
post_name: better-mongodb-backup-script-with-tar-and-move-to-s3-bucket
status: publish
post_type: post

# Better MongoDB backup script with Tar and move to S3 Bucket

A few months ago I wrote a article about a MongoDB backup script. It worked, but after a while it became useless because it kept locking my MongoDB server. And with that lock it did not open it afterwards so my sites just crashed. This happend because the MongoDb was just to big to handle within a reasonable time. So I had to write another MongoDB backups script.  This script, creates a backup from any MongoDB database, turns it into a tar file and moves it to any Amazon S3 environment. 

## MongoDB Backups script

The script is pretty straight forward. Just change the [vars] and you can backup your MongoDB!  Have fun using it!