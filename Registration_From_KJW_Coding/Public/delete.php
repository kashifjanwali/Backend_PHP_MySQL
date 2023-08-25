<?php
require_once "../App/database.php";
use App\Database;

$new_std = new Database();
$std_id = $_GET['id'] ?? null;

if($std_id) {
    $new_std->deleteData($std_id);
}

header("Location: index.php");
?>