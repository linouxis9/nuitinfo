<?php
// Représentation d'un contact
class stuff extends TableObject {
    static public $tableName = "stuff";
    static public $keyFieldsNames = array('id_stuff');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
