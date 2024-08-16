<?php
namespace Boutik\Controllers;
use Boutik\Core\Controller;
use Boutik\Models\ClientModel;


class  ClientController   extends Controller
{
    
    private ClientModel $clientModel;


    public function __construct() {
        $this->clientModel= new ClientModel();
    }

    public function load(){
        $clients=$this->clientModel->findPaiement();
        
      
        parent::loadView("/views/client/form.html.php");
       
    }

   
       
    }  

