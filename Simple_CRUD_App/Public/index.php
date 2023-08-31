<?php
require_once "../App/db.php";
use Pak\MostCent;

$new_rec = new MostCent();
$all_records = $new_rec->getRecord();
$title = "Simple PHP<br>CRUD(Create, Read, Update, Delete)<br>Application";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap@5.3 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <title>
            <?php echo $title; ?>
        </title>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container py-2">
            <p class="lead text-center">
                <?php echo $title; ?>
            </p>
            <hr>
            <a href="./add_edit.php" class="btn btn-success fw-bold" style="margin-left: 280px">Add Record</a>
            <table class="table mx-auto w-50 my-3">
                <caption class="caption-top text-center fw-bold">Pakistani batters with most ODI hundreds</caption>
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>100's</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($all_records as $records): ?>
                        <tr class="lead">
                            <td>
                                <?php echo $records['p_rank']; ?>
                            </td>
                            <td>
                                <?php echo $records['p_name']; ?>
                            </td>
                            <td>
                                <?php echo $records['p_cent']; ?>
                            </td>
                            <td>
                                <a class="text-dark" href="add_edit.php?p_id=<?php echo $records['p_id']; ?>"><i class="bi bi-pencil-square"></i></a>
                                <a class="text-dark mx-3" href="delete.php?p_id=<?php echo $records['p_id']; ?>"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    </body>

</html>