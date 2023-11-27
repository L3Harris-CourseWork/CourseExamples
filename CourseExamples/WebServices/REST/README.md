REST Activity Instructions
==========================

Getting Started
---------------

Download RESTAPI.php, and RestClient.php to your SE lab computer from [here](https://github.com/swen-343/CourseExamples/tree/master/WebServices/REST).  Move the files into your Z drive at the following location: Z:\public_html\

Open PuTTY, and logon to nitron.se.rit.edu over port 22 using your SE username and password.  Once you have logged in, run the following commands:

* chmod 755 public_html
* cd public_html
* chmod 755 RESTAPI.php
* chmod 755 RestClient.php

Once you have run this, you can view the pages by opening a browser, and going to: http://www.se.rit.edu/~ _your username_ /RestClient.php.  You can also call the API directly by entering the appropriate parameters to the RESTAPI.php file like so: http://www.se.rit.edu/~ _your username_ /RESTAPI.php?action=get_person_list

Now you are ready to make some changes

Making Changes
--------------

The change you will make will be to swap out the API that you reference with a different one, so that, for example, instead of pointing to http://www.se.rit.edu/~dkrutz/swen-343/REST/RESTAPI.php?action=get_person_list you point to http://www.se.rit.edu/~ _your username_ /RESTAPI.php?action=get_person_list.

In order to do this, you will need to change the references within the RestClientAPI.php file, replacing all occurences of dkrutz with your username.  Once you do that, you are now pointing at your own API!

Now, feel free to edit the data in RESTAPI.php as you see fit, and watch as the RestClient.php page picks up those changes.  If you want you can also make changes to the RestClient.php file in order to display the data in more interesting ways.  If you want a more comprehensive overview of what is possible with PHP, go [here](http://www.w3schools.com/php/).
