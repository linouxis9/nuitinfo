<?php
// Représentation d'un contact
class User extends TableObject {
    static public $tableName = "User";
    static public $keyFieldsNames = array('user_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
