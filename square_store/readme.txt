
Square Digital Store

A Chrome Extension System that allow Users to buy Ads, Products & Services Seen on Youtube and Tik-Tok without leaving Youtube and TikTok Website respectively,
 Powered by Square API(Square Customer API, Payments API, Order API, Invoice API)

How To Test the Application:

1.) Once You Download the Code from Github, copy Chrome_new folder which contains Chrome Extension Codes to any folder/directory of your choice.

At Chrome_new folder. goto script folder, then open app_script.js and edit the web URL(Eg. http://localhost/square_store/) in each Jquery-Ajax Code 
to ensure it points to the php backend Codes based on your site URL.

2.) open chrome browser. goto Manage Extension --Click on Load Unpacked --> Select Chrome_new folder. Ensure that it gets loaded without Error. You will see
the Chrome extension app(Square Digital Store) within the Chrome Extension Dashboard


 Setting up backend was written in PHP, Mysql etc.



3.)You will need to install Xampp Server. After installation, ensure that PHP and Mysql Database has been started and Running from Xampp Control Panel.

4.) Locate the database table called square_store_db.SQL within the application sourcecode folder. Create a database name called square_store
 and import it to your database via Phpmyadmin interface eg:  http://localhost/phpmyadmin/

5.) Edit Settings.php to update your Square Sandbox Access Token and Square Business Location ID  where appropriates.

6.) Edit data6rst.php to reflect your database credentials

7.) Edit store_fetch_youtube_tiktok.php at line code 86, Ensure that web URL(Eg. http://localhost/square_store/) points to product images

8.) Callup the application on the browser Eg http://localhost/square_store/index.php

