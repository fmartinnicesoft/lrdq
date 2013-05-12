<?php

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

if(!isset($params)){
    require_once(ROOT.'controllers/accueil.php');
}else{
    $params = explode('/',$_GET['p']);
    $controller = $params[0];
    $action = $params[1];
}

?>
