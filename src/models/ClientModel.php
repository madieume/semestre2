<?php
namespace Boutik\Models;
class ClientModel {


    public function findPaiement() {
        $sql="SELECT * FROM `paiement`p join `dette` d on p.idDette=d.iddet";
        $pdo= new \PDO('mysql:host=localhost;dbname=semestre2', "root", "");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $result=$pdo->query($sql);
        return $result->fetchAll();
    }

    public function addPaiement(array $data) {
        $sql="INSERT INTO `paiement` (`numero`, `date`, `montant`,`iddette`) VALUES (:numero,:date,:montant,:iddette)";
        $pdo= new \PDO('mysql:host=localhost;dbname=semestre2', "root", "");
        $stm = $pdo->prepare($sql);
        $stm->execute($data);
        return $pdo->lastInsertId();   
        }
      

}


       
  