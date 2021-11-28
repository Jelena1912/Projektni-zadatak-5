<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$errors = [];
$title='';
$price='';
$description='';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');


    if (!$title) {
        $errors[] = 'Product title is required';
    }
    if (!$price) {
        $errors[] = 'Product price is required';
    }

    if (empty($errors)) {

        $statement = $pdo->prepare("INSERT INTO products(title, image, description, price, create_date)
    VALUE(:title, :image, :description, :price, :date)
");

        $statement->bindValue('title', $title);
        $statement->bindValue('image', ' ');
        $statement->bindValue('description', $description);
        $statement->bindValue('price', $price);
        $statement->bindValue('date', $date);

        $statement->execute();
    }
}
// image=&title=&description=&price=
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Products CRUD</title>
</head>
<body>
<h1>Create new Product</h1>

<?php if(!empty($errors)): ?>

<div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
        <div><?php echo $error ?> </div>
    <?php endforeach; ?>
</div>

<?php endif; ?>


<form action="" method="post">
    <div class="form-group">
        <label>Product Image</label>
        <br>
        <input type="file" name="image">

    </div>
    <div class="form-group">
        <label>Product Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
    </div>
    <div class="form-group">
        <label>Product Description</label>
        <textarea class="form-control" name="description" "> <?php echo $description ?> </textarea>
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" step=".01" class="form-control" name="price" value="<?php echo $price ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $i => $product): ?>
        <tr>
            <th scope="row"><?php echo $i + 1 ?></th>
            <td><?php ?></td>
            <td><?php echo $product['title'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><?php echo $product['create_date'] ?></td>
            <td>
                <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
        </tr>


    <?php endforeach;

    ?>
    </tbody>
</table>
</body>
</html>

