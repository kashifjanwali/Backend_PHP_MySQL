<?php
require_once "../App/database.php";
use App\Database;

$new_std = new Database();

$title = "Add New data / Edit Existing Data";

if ($_POST) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gander = $_POST['gander'];
    $religion = $_POST['religion'];
    $qualification = $_POST['qualification'];
    $area = $_POST['area'];

    if ($id) {
        $new_std->updateData($id, $name, $phone, $email, $age, $gander, $religion, $qualification, $area);
    } else {
        $new_std->addData($name, $phone, $email, $age, $gander, $religion, $qualification, $area);
    }

    header("location: index.php");
    exit();
}

$id = $_GET['id'] ?? null;

if ($id) {
    $id_data = $new_std->getId($id);
} else {
    $id_data = array();
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap 5.3 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <title>
            <?php echo $title ?>
        </title>
    </head>

    <body>
        <div class="container py-5">
            <p class="lead text-center fs-1">
                <?php echo $title ?>
            </p>

            <form method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control"
                        value="<?php echo $id_data['name'] ?? null; ?>">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" id="phone" name="phone" class="form-control"
                        value="<?php echo $id_data['phone'] ?? null; ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control"
                        value="<?php echo $id_data['email'] ?? null; ?>">
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" id="age" name="age" class="form-control"
                        value="<?php echo $id_data['age'] ?? null; ?>">
                </div>

                <div class="mb-3">
                    <label for="gander" class="form-label">Gander</label>
                    <input type="text" id="gander" name="gander" class="form-control"
                        value="<?php echo $id_data['gander'] ?? null; ?>">
                </div>

                <div class="mb-3">
                    <label for="religion" class="form-label">Religion</label>
                    <input type="text" id="religion" name="religion" class="form-control"
                        value="<?php echo $id_data['religion'] ?? null; ?>">
                </div>

                <div class="mb-3">
                    <label for="qualification" class="form-label">Qualification</label>
                    <input type="text" id="qualification" name="qualification" class="form-control"
                        value="<?php echo $id_data['qualification'] ?? null; ?>">
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" id="area" name="area" class="form-control"
                        value="<?php echo $id_data['area'] ?? null; ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">

                <div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
            </form>
    </body>

</html>