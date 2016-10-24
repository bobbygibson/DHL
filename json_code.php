<?php
// header('Content-Tyope: application/json');

require_once('StudentDB.php');

$json_data = json_decode('{"first_name" : "Dale"}');

var_dump($json_data);

?>
