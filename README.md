# **Ping Pong**
#### Charles Peden & Andrew Devlin, 2017

&nbsp;
## Description
An App that says ping pong a lot when divisible by 3 & 5

Specs

1. program takes a number and outputs an array of numbers up to and including that number. input: 5 output: 1, 2, 3, 4, 5

2. program prints ping for all multiples of 3. input: 3 output: 1, 2, ping

3. program prints pong for all multiples of 5. input: 5 output 1, 2, ping, 4, pong

4. program prints ping pong for all multiples of 15. input: 15 output: 1,2 ping, 4, pong, ping, 7, 8, ping, pong, 11, ping, 13, 14, ping pong

&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Install and configure Mamp, MySQL, and PDO.
* Go to my [Github repository] (https://github.com/ccbpeden/ping_pong)
* Download the zip file via the green button
* Unzip the file and open the **ping_pong** folder
* Open Terminal, navigate to **ping_pong** project folder, type **_composer install_** and hit enter
* Navigate Terminal to the **ping_pong/web** folder and set up a server by typing **_php -S localhost:8000_**
* Activate Mamp and Start Servers
* Type /Applications/MAMP/Library/bin/mysql --host=localhost -uroot proot
* In a web browser, browse to localhost:888/phpmyadmin.
* Click the import tab in the phpmyadmin gui and select the zipped database included in the project folder.
* The application should now load and be ready to use!
* Type **_localhost:8000_** into your web browser

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [ccbpeden@warpmail.net](mailto:ccbpeden@warpmail.net)._

Copyright (c) 2017 Charles Peden & Andrew Devlin

This software is licensed under the MIT license
