<?php
// Classe pour l'accès à la table Contacts
// par héritage de DAO, fournit les méthodes getOne(id), getAll(), insert($objet_Contact), update($objet_Contact) et
// delete($objet_Contact)
// On ajoute getEmpty() pour créer un contact vide
class AreaDAO extends DAO {
    protected $class = "Area";

    public function getOne($id) {
       // Ici on utilise une requête simple
       $stmt = $this->pdo->query("SELECT * FROM Area WHERE id='$id'");
       $row = $stmt->fetch(PDO::FETCH_ASSOC);
       return new Area($row['area_id'], $row['area_name'],$row['area_description']);
   }
   public function getAll() {
      // Ici on utilise une requête simple
      $stmt = $this->pdo->query("SELECT * FROM Area);
      foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
            $res[] =  new Area($row['area_id'], $row['area_name'],$row['area_description']);
        return $res;
  }
}
