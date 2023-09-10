<?php
$title = "Add / Edit your Name";

require_once "../App/dataBase.php";

use Province\City;

$new_name = new City();

if ($_POST) {
    $pid = $_POST['id'];
    $n = $_POST['name'];
    $new_name->addName($n);
    header("Location: index.php");
}

$pid = $_GET['id'] ?? null;
if($pid){
    $pid =$
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstarp css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>
            <?php echo $title ?>
        </title>
    </head>

    <body>


        <div class="container py-">
            <h3 class="text-center py-3">
                <?php echo $title ?>
            </h3>
            <form method="post" class="form">
                <div class="mb-4 mx-auto w-50">
                    <label for="p-name" class="form-label">Enter your Name</label>
                    <input type="text" id="p-name" name="name" class="form-control">
                </div>

                <input type="hidden" name="id" value="<?php echo $pid ?>">

                <div class="mb-4 mx-auto w-50">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
        <!-- javascrip bootstarp -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    </body>

</html>