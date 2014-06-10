                                ..--.`            
                                `-----.`          
                                 .-------.`       
                    ``            .---------.     
                  .-:::---..```   `----------     
                  `-::::::::::::.  `---------     
                    `-:::::::::::.  .--------     
                      .-::::::::::`  --------     
                        .::::::::::` `-------     
           ```..--::/-`  `.::::::::-` .------     
        -::////////////:.  `.:::::::-  .-----     
       ./////////////////:.  `-::::::-  -----     
        `.-:://////////////:.` `-:::::. `----     
             `.-::///////////:-` `-::::. .---     
       `.::-..`  ``.-://////////-` .-:::` ---     
    `.:/++++++//:-.`` ``.-:///////-``.-::``--     
 `.:/++++++++++++++///:-.```.-::////:.`.:--`-    
-/+++++++++++++++++++++++//:-..``.-::/:.`.- .     
//////+++++++++++++++++++++++++//:-....--.``      
```````````.........---------:::::::::-..``      
`````````````.........--------:::::::::-.``       
/+++++++++++++++++++++++++++++++//:-...-:-..`     
:++++++++++++++++++++++++++/:-.``.-:/++:.-/.+     
 `-/+++++++++++++++++//:..```.:/+ooo+-`-+o.:y     
    `-/+++++++++/:-.`  `.-/+oooooo+-`./oo-.yy     
       `-//:-.``  `.-/+ooooooooo/.`./ooo:`syy     
             ``-:/+ooooooooooo/. `/oooo/ +yyy     
        ``.:/+oooooooooooooo/. `:ooooo/ -yyyy     
       -+oooooooooooooooo+:` `-+ooooo+`.syyyy     
       `/+ooooooooooooo+:` `-+ooooooo` oyyyyy     
         ``.--://++oo+-`  .+oooooooo. /yyyyyy     
                   `.   ./ooooooooo- .yyyyyyy     
                      `/oooooooooo: `syyyyyyy     
                    `/ooooooooooo/  +yyyyyyyy     
                  `:oooooooooooo+` :yyyyyyyyy     
                  /ooooooo+/::-.` .syyyyyyyyy     
                   `--.``         oyyyyyyyyy+     
                                 /yyyyyyyo:`      
                                -yyyyyo:`         
                                /oss/. 
                                
  DidChaKnow
  Jake Brown
  Chattanooga Public Library
  http://jake.sl/DidChaKnow
  http://chattlibrary.org/4th-floor
================================================
This is a simple PHP application that displays a random row from a MySQL database with each refresh. In addition, it includes a dynamic background which changes on each refresh. You can preview it at http://jake.sl/DidChaKnow


Instructions for Setup:

1. Configure a MySQL database to be used with the application. You can do this in the config.php file by specifying the database host, name, user, and password. Important note: When you upload this file to your server, give the config.php file a non world readble permission. Something like 600 would do the trick. The SQL query is near line 160 of index.php. By default, it refers to table name "Questions" and column name "Fact." If you're creating a new database, no need to change them. Otherwise, change it to your table of choice. Once your database is created, you'll want to create the table. In your shell with mysql running, you can run the query:

CREATE TABLE Questions (id INT NOT NULL AUTO_INCREMENT, fact TEXT NOT NULL;

If you need help doing that, this is a helpful guide: http://www.wikihow.com/Send-Sql-Queries-to-Mysql-from-the-Command-Line

2. Now that your config.php file is filled in, put it on your web server. This could be a guide in and of itself, so reference this if you need help. http://www.howtoforge.com/ubuntu_lamp_for_newbies

3. Everything should be running peachy now. The only step left is to populate your database with facts. I've been using the program "Sequel Pro" to do this. MySQL Workbench would also work well for this, but that just depends on the system you're running and your personal preference. 

That's it!

====

Note on Images:

The images included in this repository are licensed for not-for-profit use only by their respective copyright holders. They are included only as examples and excluded from the license which covers the software as a whole.

Images must be labeled as 1.gif, 2.gif, 3.gif, etc. The default number of images is set to 2. This can be changed by setting var totalCount = 2; to whatever you'd like. NameChanger is a good application for mass-renaming a collection of images.






