<?php
spl_autoload_register('myloader');

function myloader($classname){
    require "../app/models/" .$classname . ".php";
}

require "config.php";
require "functions.php";
require "database.php";
require "model.php";
require "controller.php";
require "app.php";
