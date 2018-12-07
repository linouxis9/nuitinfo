<?php
// Représentation d'un contact
class checkList extends TableObject {
    static public $tableName = "CheckList";
    static public $keyFieldsNames = array('checkList_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
