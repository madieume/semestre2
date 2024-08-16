<?php

namespace Boutik\Controllers;
use Boutik\Models\DetteModel;
use Boutik\Core\Controller;
use Boutik\Models\ArticleModel;

class  DetteController extends Controller
{
    private DetteModel $detteModel;
    private ArticleModel $articleModel;

    public function __construct()
    {
        $this->detteModel = new DetteModel();
        $this->articleModel = new ArticleModel();
    }


    public function load()
    {

        $dettes = [];
        if (isset($_REQUEST["action"])) {
            if ($_REQUEST["action"] == "dette") {

                $dettes = $this->detteModel->findDette();
                $articles = $this->articleModel->findArticle();

                if (isset($_REQUEST["prenom"])){
                    $dettes=$this->detteModel->findDetteByClient($_REQUEST["prenom"]);
                }

                if (isset($_REQUEST["date"])){
                    $dettes=$this->detteModel->findDetteByDate($_REQUEST["date"]);
                }
                
                if (isset($_REQUEST["etat"])){
                    $dettes=$this->detteModel->findDetteByEtat($_REQUEST["etat"]);
                }
                parent::loadView("/views/dette/liste.html.php", ["dettes" => $dettes,"articles"=>$articles]);
            }elseif ($_REQUEST["action"] == "detail") {
                    parent::loadView("/views/dette/detail.html.php");
            }
        } else {
            $dettes = $this->detteModel->findDette();
            $articles = $this->articleModel->findArticle();
            parent::loadView("/views/dette/liste.html.php", ["dettes" => $dettes,"articles"=>$articles]);
        }

      
        
    }
    private function findDette()
    {
        $dettes = $this->detteModel->findDette();
        if(isset($_POST["prenom"])){
            // var_dump("ok");
            // die;
            $dettes = $this->detteModel->findDetteByClient($_POST["prenom"]);
            $articles = $this->articleModel->findArticle();

        }
        $dettes = $this->detteModel->findDette();
        if(isset($_POST["date"])){
            // var_dump("ok");
            // die;
            $dettes = $this->detteModel->findDetteByDate($_POST["date"]);
            $articles = $this->articleModel->findArticle();

        }
        $dettes = $this->detteModel->findDette();
        if(isset($_POST["categorie"])){
            // var_dump("ok");
            // die;
            $dettes = $this->detteModel->findDetteByEtat($_POST["etat->"]);
            $articles = $this->articleModel->findArticle();

        }
        parent::loadView("/views/dette/liste.html.php", ["dettes" => $dettes,"articles"=>$articles]);
       


    }

    
    
}

