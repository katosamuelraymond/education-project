<?php

if (!defined('APPNAME')) {
    define('APPNAME', 'Incredible Education');
}
if (!defined('APPDESC')) {
    define('APPDESC', 'Free and paid courses');
}


if ($_SERVER['SERVER_NAME'] == 'localhost') {
    
    define('DBHOST', 'localhost');
    define('DBNAME', 'incredible education');   
    define('DBUSER', 'root');
    define('DBPASS', '');
} else {
    
    define('DBHOST', 'sql303.byethost3.com');
    define('DBNAME', 'b3_38677495_incredibleeducation');
    define('DBUSER', 'b3_38677495');
    define('DBPASS', '0752084847sam');
}

if (!defined('DBDRIVER')) {
    define('DBDRIVER', 'mysql');
}


if (!defined('ROOT')) {
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
        define('ROOT', rtrim('http://localhost/education project/', '/'));
    } else {
        define('ROOT', rtrim('http://samuelray.byethost3.com/', '/'));
    }
}
