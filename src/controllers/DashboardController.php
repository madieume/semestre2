<?php
namespace Boutik\Controllers;
use Boutik\Core\Controller;
use Boutik\Models\DashboardModel;



class DashboardController extends Controller{
    private DashboardModel $dashboardModel;


    public function __construct() {
        $this->dashboardModel= new DashboardModel();
    }

    // public function load(){
    //     $dashboard=$this->dashboardModel->find();
        
      
    //     parent::loadView("/views/dashboard/statistique.html.php");
       
    // }
}