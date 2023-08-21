<?php $title="Add / Edit Your Data" ?>

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
        <p class="lead my-5 text-center"><?php echo $title ?></p>

        <form method="get" class="form">
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="mb-3">
    <label for="dob" class="form-label">Email</label>
    <input type="date" class="form-control" id="dob" name="dob">
  </div>
    </form>
<div>
    <button class="btn btn-success">Save</button>
    <button class="btn btn-danger">Cancel</button>
    </div>
</div>
</body>
</html>