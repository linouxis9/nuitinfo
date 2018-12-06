<?php
// Représentation d'un contact
class checkList extends TableObject {
    static public $tableName = "checkList";
    static public $keyFieldsNames = array('id_checkList');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
