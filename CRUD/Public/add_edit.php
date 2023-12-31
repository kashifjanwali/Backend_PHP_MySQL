<?php
require_once "../App/database.php";
use App\Database;

$db = new Database;
$title = "Add / Edit Your Data";

if ($_POST) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];

  if($id) {
    $db->deleteData($id);
  }
  else {
    $db->addData($name, $email, $dob);
  }
  header("Location: index.php");
}

$id = $_GET['id'] ?? null;

if($id) {
  $id_data = $db->getId($id);
}
else {
  $id_data = array();
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>


  </head>

  <body>
    <div class="container">
      <p class="lead my-5 text-center">
        <?php echo $title ?>
      </p>

      <form method="post" class="form">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name"
          value="<?php echo $data['name'] ?? null; ?>">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email"
          value="<?php echo $data['email'] ?? null; ?>">
        </div>

        <div class="mb-3">
          <label for="dob" class="form-label">Date Of Birth</label>
          <input type="date" class="form-control" id="dob" name="dob"
          value="<?php echo $data['dob'] ?? null; ?>">
        </div>
  
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <div>
          <button type="submit" class="btn btn-success">Save</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </body>

</html>