<?php
// Prevent redefining constants
if (!defined('APPNAME')) {
    define('APPNAME', 'Incredible Education');
}
if (!defined('APPDESC')) {
    define('APPDESC', 'Free and paid courses');
}

if (!defined('DBHOST')) {
    define('DBHOST', 'localhost');
}
if (!defined('DBNAME')) {
    define('DBNAME', 'incredible education');
}
if (!defined('DBUSER')) {
    define('DBUSER', 'root');
}
if (!defined('DBPASS')) {
    define('DBPASS', '');
}
if (!defined('DBDRIVER')) {
    define('DBDRIVER', 'mysql');
}

if (!defined('ROOT')) {
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
        define('ROOT', 'http://localhost/education project/public');
    } else {
        define('ROOT', 'http://yourwebsite.com');
    }
}
