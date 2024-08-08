<?php
namespace Boutik\Controllers;
use Boutik\Models\DetteModel;
use Boutik\Core\Controller;

class  DetteController extends Controller{
    private DetteModel $detteModel;

    public function __construct() {
        $this->detteModel= new DetteModel();
    }


public function load(){
   
    $dettes=[];
    if (isset($_REQUEST["action"])){
        if ($_REQUEST["action"]="dette"){
           
        $dettes=$this-> detteModel->findDette() ;
       
      
        }
    }else{
        $dettes=$this-> detteModel->findDette() ;
        // var_dump($dettes);
        // die;
        
    }



    // $dettes=$this->detteModel->findDette();

    parent::loadView("/views/dette/liste.html.php",["dettes"=>$dettes]);
    
    // require_once ROOT."/views/dette/liste.html.php";
    // require_once ROOT."/views/dette/detail.html.php";
    // require_once ROOT."/views/paiement/form.html.php";
  
}


private function findDette(){
    $dettes= $this-> detteModel->findDette();
}





}