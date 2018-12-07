<?php
// Représentation d'un contact
class stuffCheckList extends TableObject {
    static public $tableName = "StuffCheckList";
    static public $keyFieldsNames = array('stuffchecklist_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
