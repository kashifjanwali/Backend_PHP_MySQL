<?php
require_once "../App/database.php";
use App\Database;

$new_std = new Database();

$title = "Registration Form KJW Coding";

$all_data = $new_std->getData();

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
        <div class="container-fluid py-5">
            <p class="lead text-center text-secondary fs-1">
                <?php echo $title ?>
            </p>
            <table class="table table-sm table-responsive-md table-bordered table-striped mb-3 border-secondary">
                <caption class="caption-top text-center fs-4">List of Students</caption>
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gander</th>
                        <th>Religion</th>
                        <th>Qualification</th>
                        <th>Area</th>
                        <th>Action Buttons</th>
                    </tr>
                </thead>

                <tbody class="lead">
                    <?php foreach ($all_data as $data): ?>
                        <tr>
                            <td>
                                <?php echo $data['name'] ?>
                            </td>
                            <td>
                                <?php echo $data['phone'] ?>
                            </td>
                            <td>
                                <?php echo $data['email'] ?>
                            </td>
                            <td>
                                <?php echo $data['age'] ?>
                            </td>
                            <td>
                                <?php echo $data['gander'] ?>
                            </td>
                            <td>
                                <?php echo $data['religion'] ?>
                            </td>
                            <td>
                                <?php echo $data['qualification'] ?>
                            </td>
                            <td>
                                <?php echo $data['area'] ?>
                            </td>
                            <td>
                                <a href="./add_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
                                <a href="./delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Adding New Data -->
            <a href="./add_edit.php" class="btn btn-secondary">Add New Data</a>
        </div>



        <!-- Bootstrap 5.3 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>

    </body>

</html>