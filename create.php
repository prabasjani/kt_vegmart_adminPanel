<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <main class="container">
    <div class="d-flex justify-content-between align-items-center border-bottom py-3">
      <h2>Add New Product</h2>
      <a href="index.php" class="nav-link text-danger fw-bold">Back</a>
    </div>
    <form class="mt-3" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <footer class="fixed-bottom container text-center">
      <p>&copy; <?php echo date("Y"); ?> | All Rights Reserved | Developed by <span class="text-secondary fw-bold">Prabanjan</span></p>
    </footer>
  </main>

</body>
</html>
