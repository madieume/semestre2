<?php

use Boutik\Controllers\DetteController;
use Boutik\Controllers\PaiementController;



define("ROOT", "C:/Users/Madieume/Desktop/ExamenPhpTailwind");
define("WEBROOT", "http://localhost:8000/");
require_once ROOT . "/vendor/autoload.php";

if (isset($_REQUEST['controller'])) {
    if ($_REQUEST["controller"] == 'dette') {
        $controller = new DetteController();
        $controller->load();
    } elseif ($_REQUEST["controller"] == 'paiement') {
        $controller = new PaiementController();
        $controller->load();
    }
   
    
    
} else {
    $controller = new DetteController();
   

    $controller->load();
}



