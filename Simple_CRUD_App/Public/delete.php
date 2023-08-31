<?php
require_once "../App/db.php";
use Pak\MostCent;

$new_rec = new MostCent();

$p_id = $_GET['p_id'] ?? null;

if($p_id) {
    $new_rec->deleteRecord($p_id);
}
else {
    $new_rec = array();
}
header("Location: index.php");
exit();
?>