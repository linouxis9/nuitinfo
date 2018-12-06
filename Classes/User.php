<?php
// Représentation d'un contact
class User extends TableObject {
    static public $tableName = "users";
    static public $keyFieldsNames = array('id_user');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
