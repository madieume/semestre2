<?php

use Boutik\Controllers\ArticleController;
use Boutik\Controllers\DetteController;
use Boutik\Controllers\ClientController;
use Boutik\Models\ClienttModel;

define("ROOT", "C:/Users/Madieume/Desktop/ExamenPhpTailwind");
define("WEBROOT", "http://localhost:8000/");
require_once ROOT . "/vendor/autoload.php";

if (isset($_REQUEST['controller'])) {
    if ($_REQUEST["controller"] == 'dette') {
        $controller = new DetteController();
        $controller->load();
        
    } elseif ($_REQUEST["controller"] == 'client') {
       $controller= new ClientController();
        $controller->load();

    } elseif ($_REQUEST["controller"] == 'article') {
        $controller= new ArticleController;
        $controller->load();
    }
   
    
    
} else {
    $controller = new DetteController();
   

    $controller->load();
}



