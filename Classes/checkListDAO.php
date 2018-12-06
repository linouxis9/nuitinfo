<?php
// Classe pour l'accès à la table Contacts
// par héritage de DAO, fournit les méthodes getOne(id), getAll(), insert($objet_Contact), update($objet_Contact) et
// delete($objet_Contact)
// On ajoute getEmpty() pour créer un contact vide
class checkListDAO extends DAO {
  protected $class = "checkList";

  public function getAllChecklist($checklistID) {
    $res = array();
    $stmt = $this->pdo->prepare("SELECT * FROM StuffCheckListe join Stuff using(stuff_id) WHERE checklist_id = ?");
    $stmt->execute(array($checklistID));
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
      $res[] = $row;
    }
    return $res;
  }

}
