<?php
namespace Boutik\Controllers;
use Boutik\Core\Controller;
use Boutik\Models\ArticleModel;



class  ArticleController extends Controller{
    private ArticleModel $articleModel;


    public function __construct() {
        $this->articleModel= new ArticleModel();
    }

    public function load(){
        $articles=$this->articleModel->findArticle();
        
      
        parent::loadView("/views/dette/form.html.php");
       
    }


    // public function enregistrerDette()
    // {
    //     // Inclure le modèle
    //     require_once 'models/ClientModel.php';
    //     require_once 'models/DetteModel.php';

    //     // Variables pour stocker les erreurs et les messages de succès
    //     $errors = [];
    //     $success = "";

    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         if (isset($_POST['tel'])) {
    //             $tel = $_POST['tel'];

    //             // Validation du téléphone
    //             if (empty($tel)) {
    //                 $errors[] = "Le numéro de téléphone est requis.";
    //             } else {
    //                 // Utiliser le modèle pour rechercher le client
    //                 $clientModel = new ArticleModel();
    //                 $client = $clientModel->getClientByTel($tel);

    //                 if ($client) {
    //                     $prenom = $client['prenom'];
    //                     $nom = $client['nom'];
    //                 } else {
    //                     $errors[] = "Client non trouvé.";
    //                 }
    //             }
    //         }

    //         if (isset($_POST['ref'])) {
    //             $ref = $_POST['ref'];
    //             $art = $_POST['art'];
    //             $qte = $_POST['qte'];

    //             // Validation des entrées
    //             if (empty($ref) || empty($art) || empty($qte)) {
    //                 $errors[] = "Tous les champs sont obligatoires.";
    //             } else {
    //                 // Utiliser le modèle pour ajouter la dette
    //                 $articleModel = new ArticleModel();
    //                 $articleModel->ajouterDette($ref, $art, $qte, 5000); 
    //                 $success = "Dette enregistrée avec succès.";
    //             }
    //         }
    //     }

      
    // }
    
}