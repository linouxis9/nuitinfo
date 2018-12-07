<?php
// Représentation d'un contact
class Duration extends TableObject {
    static public $tableName = "Duration";
    static public $keyFieldsNames = array('duration_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
