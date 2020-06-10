<?php

//Cofig File
require_once 'config.php';

//Auto load files
function __autoload($class_name) {
    require_once 'lib/'.$class_name. '.php';
}
