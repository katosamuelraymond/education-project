<?php
// echo "<pre>";
// print_r ($_SERVER);
// echo "</pre>";

define ('APPNAME','incredible education');
define ('APPDESC','free and paid courses ');


    if($_SERVER['SERVER_NAME'] == 'localhost'){
        define ('DBHOST','localhost');
        define ('DBNAME','incredible education');
        define ('DBUSER','root');
        define ('DBPASS','');
        define ('DBDRIVER','mysql');
        define('ROOT','http://localhost/education project/public');
    }else{
        define ('DBHOST','localhost');
        define ('DBNAME','incredible education');
        define ('DBUSER','root');
        define ('DBPASS','');
        define ('DBDRIVER','mysql');
        define('ROOT','http://');
    }