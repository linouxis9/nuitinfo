<?php
// Représentation d'un contact
class Stuff extends TableObject {
    static public $tableName = "Stuff";
    static public $keyFieldsNames = array('stuff_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }

    public function toSelectOption() {
        $idStuff = $this->stuff_id;
        $stuffName = $this->stuff_name;
        echo '<option value="'.$idStuff.'">'.$stuffName.'</option>';
    }
}
