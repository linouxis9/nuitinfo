<?php
// Représentation d'un contact
class CheckListOption extends TableObject {
    static public $tableName = "CheckListOption";
    static public $keyFieldsNames = array('checklistoption_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }

    public function toTableRow() {
        $rows = $this->getAllCheckListOption($this->weather_id, $this->area_id);
        foreach($rows as $row) {
            echo '<tr>';
            foreach($row as $vaue) {
                echo '<td>'.$value.'</td>';
            }
            '</tr>';
        }
    }
}
