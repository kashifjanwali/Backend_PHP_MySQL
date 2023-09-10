<?php
$title = "One Column CRUD App";

require_once "../App/dataBase.php";

use Province\City;

$new_name = new City();

$all_names = $new_name->getName();
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

        <h3 class="text-center py-3">
            <?php echo $title ?>
        </h3>

        <table class="table w-50 mx-auto">
            <thead class="table-success">
                <tr>
                    <th width="60%">Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody class="lead">
<?php foreach($all_names as $name): ?>
                <tr>
                    <td><?php echo $name['name']; ?></td>
                    <td>
                        <a href="addEdit.php" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="addEdit.php" class="btn btn-secondary mt-3" style="margin-left: 325px">Add your Name</a>






        <!-- javascrip bootstarp -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    </body>

</html>