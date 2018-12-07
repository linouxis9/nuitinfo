<?php
// Représentation d'un contact
class stuff extends TableObject {
    static public $tableName = "Stuff";
    static public $keyFieldsNames = array('stuff_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
