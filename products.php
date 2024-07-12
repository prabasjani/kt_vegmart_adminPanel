<?php
  include_once 'database.php';

  $statement = $pdo->prepare('SELECT * FROM products ORDER BY id DESC');
  $statement->execute();
  $products = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

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
      <h2>All Products</h2>
      <a href="index.php" class="nav-link text-danger fw-bold">Back</a>
    </div>
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">#ID</th>
          <th scope="col">Image</th>
          <th scope="col">Product Name</th>
          <th scope="col">Price</th>
          <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody >
        <?php if(empty($products)): ?>
          <h3>No Products Found</h3>
        <?php endif; ?>

        <?php foreach($products as $i => $product) :?>
        <tr>
          <th scope="row"><?php echo $i+1; ?></th>
          <th scope="row"><?php echo $product['id']+1000; ?></th>
          <td>
            <img src="<?php echo $product['image'] ?>" alt="" width="75px">
          </td>
          <td><?php echo ucfirst($product['product_name'])?></td>
          <td>₹ <?php echo $product['price']?>.00 /Kg</td>
          <td>
            <button class="btn btn-sm btn-primary">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>

    <footer class="fixed-bottom container text-center">
      <p>&copy; <?php echo date("Y"); ?> | All Rights Reserved | Developed by <span class="text-secondary fw-bold">Prabanjan</span></p>
    </footer>
  </main>
</body>
</html>
