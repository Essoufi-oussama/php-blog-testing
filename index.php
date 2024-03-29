<?php 
    require "functions.php";
    require 'router.php';
    require_once 'Database.php';

    $config = require('config.php');

    $db = new Database($config['database']);

    
?>  