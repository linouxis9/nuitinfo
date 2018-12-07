<?php
// Représentation d'un contact
class Area extends TableObject {
    static public $tableName = "Area";
    static public $keyFieldsNames = array('area_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }

    public function toSelectOption() {
        $idArea = $this->area_id;
        $nameArea = $this->area_name;
        echo '<option value="'.$idArea.'">'.$nameArea.'</option>';
    }
}
