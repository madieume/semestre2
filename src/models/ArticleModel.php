<?php
namespace Boutik\Models;
class ArticleModel {



    public function findArticle() {
        $sql="SELECT * FROM `article`a ";
        $pdo= new \PDO('mysql:host=localhost;dbname=semestre2', "root", "");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $result=$pdo->query($sql);
        return $result->fetchAll();
    }

    // public function ajouterDette($ref, $article, $quantite, $prixUnitaire)
    // {
    //     $stmt = $this->$pdo->prepare("INSERT INTO dettes (ref, article, quantite, prix_unitaire) VALUES (:ref, :article, :quantite, :prix_unitaire)");
    //     $stmt->execute([
    //         'ref' => $ref,
    //         'article' => $article,
    //         'quantite' => $quantite,
    //         'prix_unitaire' => $prixUnitaire
    //     ]);
    // }
}