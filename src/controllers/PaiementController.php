<?php
namespace Boutik\Controllers;
use Boutik\Models\PaiementModel;



class  PaiementController{
    private PaiementModel $paiementModel;


    public function __construct() {
        $this->paiementModel= new PaiementModel();
    }

    public function load(){
        $paiements=$this->paiementModel->findPaiement();
        
      
        require_once ROOT."/views/paiement/form.html.php";
       
    }
    
}