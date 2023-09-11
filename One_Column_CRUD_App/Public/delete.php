<?php
require_once "../App/dataBase.php";

use Province\City;

$name = new City();

$p_id = $_GET['id'] ?? null;

if ($p_id) {
    $name->deleteName($p_id);
} else {
    $name = array();
}
header("Location: index.php");
exit();
?>