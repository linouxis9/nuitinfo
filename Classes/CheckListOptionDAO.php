<?php
// Classe pour l'accès à la table Contacts
// par héritage de DAO, fournit les méthodes getOne(id), getAll(), insert($objet_Contact), update($objet_Contact) et
// delete($objet_Contact)
// On ajoute getEmpty() pour créer un contact vide
class checkListOptionDAO extends DAO {
  protected $class = "CheckListOption";

  public function getAllCheckListOption($weather, $area) {
      $res =array();
      $stmt = $this->pdo->prepare('SELECT Stuff_name, checked FROM CheckListOption JOIN CheckList USING(checklist_id) JOIN CheckListStuff USING (checklist_id) JOIN Stuff USING(stuff_id) WHERE weather_id = ? AND area_id = ?');
      $stmt->execute([$weather, $area]);
      foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
          $res[] = $row;
      }
      return $res;
  }

  public function getOneByWeatherAndArea($weather, $area) {
      $res = array();
      $checkListOptionDAO = new CheckListOptionDAO($this->pdo);
      $stmt = $this->pdo->prepare('SELECT stuff_name from Stuff join CheckListStuff using(stuff_id) join CheckListOption using(checklist_id) where weather_id = ? and area_id = ?;');
      $stmt->execute([$weather, $area]);
      return new CheckListOption($stmt->fetch(PDO::FETCH_ASSOC));
  }

}
