<?php
require_once __DIR__ . "/../autoload.php";

$checkList = new checkListDAO(MaBD::getInstance());
print_r($checkList -> getAllChecklist(1));


 ?>
