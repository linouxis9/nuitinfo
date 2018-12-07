<?php
require_once __DIR__ . "/../autoload.php";

$checklist = new checkListDAO(MaBD::getInstance());
echo "<pre>";
print_r($checklist -> getAllChecklist(1));
echo "</pre>";

 ?>
