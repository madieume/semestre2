<?php
namespace Boutik\Models;
class DetteModel {


    public function findDette() {
        $sql="SELECT d.*,cl.*,SUM(montantpaie) verse,(d.montantdet - SUM(p.montantpaie)) AS restant FROM `dette`d JOIN client cl on d.idClient=cl.idcl JOIN paiement p on d.iddet=p.idDette GROUP BY cl.idcl HAVING verse < d.montantdet";
        $pdo= new \PDO('mysql:host=localhost;dbname=semestre2', "root", "");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $result=$pdo->query($sql);
        return $result->fetchAll();
    }

  

    public function findDetteByClient(string $Client) {
        $sql="SELECT d.*,cl.*,SUM(montantpaie) verse,(d.montantdet - SUM(p.montantpaie)) AS restant FROM `dette`d JOIN client cl on d.idClient=cl.idcl JOIN paiement p on d.iddet=p.idDette GROUP BY cl.idcl HAVING verse >0 AND cl.prenomcl='$Client'";
        $pdo= new \PDO('mysql:host=localhost;dbname=semestre2', "root", "");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $result=$pdo->query($sql);
        return $result->fetchAll();
    }
    public function findDetteByDate(string $Date) {
        $sql="SELECT d.*,cl.*,SUM(montantpaie) verse,(d.montantdet - SUM(p.montantpaie)) AS restant FROM `dette`d JOIN client cl on d.idClient=cl.idcl JOIN paiement p on d.iddet=p.idDette GROUP BY cl.idcl HAVING verse >0 AND d.datedet='$Date'" ;       
        $pdo= new \PDO('mysql:host=localhost;dbname=semestre2', "root", "");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $result=$pdo->query($sql);
        return $result->fetchAll();
    }
    public function findDetteByEtat(string $Etat) {
        $sql="SELECT d.*,cl.*,SUM(montantpaie) verse,(d.montantdet - SUM(p.montantpaie)) AS restant FROM `dette`d JOIN client cl on d.idClient=cl.idcl JOIN paiement p on d.iddet=p.idDette GROUP BY cl.idcl HAVING verse >0 AND cl.categorie='$Etat'" ; 
        $pdo= new \PDO('mysql:host=localhost;dbname=semestre2', "root", "");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $result=$pdo->query($sql);
        return $result->fetchAll();
    }



    public function createDette(array $data) {
        $sql="INSERT INTO `dette` (`client`, `total`, `montant vers`,`montant du``etat``date`) VALUES (:client,:total,:montant vers,:montant du,:etat,:date)";
        $pdo= new \PDO('mysql:host=localhost;dbname=semestre2', "root", "");
        $stm = $pdo->prepare($sql);
        $stm->execute($data);
        return $pdo->lastInsertId(); 
            
           
        }
       
    }



