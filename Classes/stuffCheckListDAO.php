<?php
// Classe pour l'accès à la table Contacts
// par héritage de DAO, fournit les méthodes getOne(id), getAll(), insert($objet_Contact), update($objet_Contact) et
// delete($objet_Contact)
// On ajoute getEmpty() pour créer un contact vide
class stuffCheckListDAO extends DAO {
    protected $class = "stuffCheckList";

    public function getAllStuff() {
      $res = array();
      $stmt = $this->pdo->prepare("SELECT * FROM CheckListStuff join Stuff using(stuff_id)");
      $stmt->execute(array());
      foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $res[] = $row;
      }
      return $res;
    }
}
