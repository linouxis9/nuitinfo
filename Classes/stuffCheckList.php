<?php
// Représentation d'un contact
class stuffCheckList extends TableObject {
    static public $tableName = "stuffCheckList";
    static public $keyFieldsNames = array('id_stuffCheckList');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }
}
