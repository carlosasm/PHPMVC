<?php
// configuration
    require 'libs/Config.php';
    $config=Config::singleton();
    $config->set('controllerFolder', 'controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'view/');
    
    $config->set('dbhost', 'hostname');
    $config->set('dbname', 'dbname');
    $config->set('dbuser', 'bduser');
    $config->set('dbpass', 'dbPassword');
    
?>