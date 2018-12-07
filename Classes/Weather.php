<?php
// Représentation d'un contact
class Weather extends TableObject {
    static public $tableName = "Weather";
    static public $keyFieldsNames = array('weather_id');
    public $hasAutoIncrementedKey = true;

    public function __toString() {
        return $this->nom . " " . $this->prénom . " - " . $this->tél;
    }

    public function toSelectOption() {
        $idWeather = $this->weather_id;
        $nameWeather = $this->weather_name;
        echo '<option value="'.$idWeather.'">'.$nameWeather.'</option>';
    }
}
