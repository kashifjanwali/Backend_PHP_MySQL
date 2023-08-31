<?php
require_once "../App/database.php";
use App\Database;

$db = new Database();

$id = $_GET['id'] ?? null;

if($id) {
    $db->deleteData($id);
}
else {
    array();
}
header("Location: index.php");
exit();
?>