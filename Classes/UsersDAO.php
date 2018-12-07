<?php
// Classe pour l'accès à la table Contacts
// par héritage de DAO, fournit les méthodes getOne(id), getAll(), insert($objet_Contact), update($objet_Contact) et
// delete($objet_Contact)
// On ajoute getEmpty() pour créer un contact vide
class UsersDAO extends DAO {
    protected $class = "User";

    public function check($login, $mdp) {
        $BD = $this->getAll();
        foreach ($BD as $value)
        {
          if($value->user_login == $login &&  $value->user_password == $mdp)
          {
            return true;
          }
        }
        return NULL;
    }
}
