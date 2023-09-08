<?php
require_once "../App/db.php";
use Pak\MostCent;

$new_rec = new MostCent();

$title = "Add / Edit Records";

if ($_POST) {
    $p_id = $_POST['p_id'];
    $p_rank = $_POST['p_rank'];
    $p_name = $_POST['p_name'];
    $p_cent = $_POST['p_cent'];

    if ($p_id) {
        $new_rec->updateRecord($p_id, $p_rank, $p_name, $p_cent);
    } else {
        $new_rec->addRecord($p_rank, $p_name, $p_cent);
    }
    header("Location: index.php");
    exit();
}

$p_id = $_GET['p_id'] ?? null;
if ($p_id) {
    $pid_data = $new_rec->getPid($p_id);
} else {
    $pid_data = $new_rec = array();
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap@5.3 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


        <title>
            <?php echo $title; ?>
        </title>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container py-5">
            <p class="lead text-center fs-3">
                <?php echo $title; ?>
            </p>
            <hr>

            <form method="post" class="form py-3">
                <!-- Rank -->
                <div class="mb-4">
                    <label for="rank" class="form-label d-block mx-auto w-25 lead">Player's Ranking</label>
                    <input type="number" id="rank" name="p_rank" class="form-control w-25 mx-auto" placeholder="1"
                        value="<?php echo $pid_data['p_rank'] ?? null ?>">
                </div>

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="form-label d-block mx-auto w-25 lead">Player's Name</label>
                    <input type="text" id="name" name="p_name" class="form-control w-25 mx-auto"
                        placeholder="Babar Azam" value="<?php echo $pid_data['p_name'] ?? null ?>">
                </div>

                <!-- Centries -->
                <div class="mb-4">
                    <label for="cent" class="form-label d-block mx-auto w-25 lead">ODI Hundreds</label>
                    <input type="number" id="cent" name="p_cent" class="form-control w-25 mx-auto" placeholder="19"
                        value="<?php echo $pid_data['p_cent'] ?? null ?>">
                </div>

                <input type="hidden" name="p_id" value="<?php echo $p_id ?>">
                <div class="w-25 mx-auto">
                    <button type="submit" class="btn btn-warning">Save</button>
                    <a href="./index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>



        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    </body>

</html>