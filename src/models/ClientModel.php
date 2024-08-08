<?php
class Client {
    private $conn;
    private $table = 'clients';

    public $id;
    public $nom;
    public $prenom;
    public $telephone;
    public $email;
    public $adresse;
    public $categorie;
    public $photo;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getClients() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getClientById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function createClient() {
        $query = "INSERT INTO " . $this->table . " SET nom = ?, prenom = ?, telephone = ?, email = ?, adresse = ?, categorie = ?, photo = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssssss", $this->nom, $this->prenom, $this->telephone, $this->email, $this->adresse, $this->categorie, $this->photo);
        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>

