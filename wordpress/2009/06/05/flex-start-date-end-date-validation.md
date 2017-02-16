title: Flex Start Date End Date Validation
link: http://vandersluijs.nl/blog/2009/06/flex-start-date-end-date-validation.html
author: tvdsluijs
description: 
post_id: 411
created: 2009/06/05 10:46:00
created_gmt: 2009/06/05 10:46:00
comment_status: open
post_name: flex-start-date-end-date-validation
status: publish
post_type: post

# Flex Start Date End Date Validation

Today I really needed a validator for a Start End date check, working on a Project Application at [NL4B](http://www.nl4b.com/). As in many applications you need to check if the end date is today or further into the future.  
  
First I wanted a nice popup telling me that end date 01-01-2009 cannot be saved when having a start date that is 01-06-2009  (06= June). But than I looked at my other validated fields… and liked the validation error more than the popup I wanted.  
  
And that is where all the fun started.  
  
  
  
At [NL for Business](http://www.nl4b.com/) I am working on a Project Application in Flex and when creating new projects I wanted to be able to check the end date being not earlier than the start date.  
  
The first thing I did was create a function that checked if the end date was bigger than the start date.  
  
That was not as easy as I thought it would be. First I had to date create back the text from the date field and then convert it to milliseconds. But then there was another problem. The Dutch date format did not match up. It kept on changing my date from 01-12-2009 (1st December 2009) to 12th of January 2009.  
  
I create a nice workaround for this. But what if the date was English or with – or a / or a . or a # in it. So I also created a dynamic function for that.  
  
After a few hours of try-outs, I had the solution to the problem and created a nice dynamic validator from this. A class to be exact, which extended the Datevalidation class.  
  
But enough talk about how I got to this working. You want to see the code right ?  


  
  
  
  


  
Source can be found on [github](https://github.com/tvdsluijs/Flex-Date-Checker/tree/).  
  
Like my code ? Don't forget to  
  
![](https://www.paypalobjects.com/en_US/i/scr/pixel.gif)