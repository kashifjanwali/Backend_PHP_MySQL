<?php
require_once "../App/database.php";
use App\Database;
$db = new Database();
$id = $_GET['id'] ?? null;

if($id) {
    $db->deleteData($id);
}
else {
    $db = array();
}
header("Location: index.php");
?>