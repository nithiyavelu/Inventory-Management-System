<?php
include "db.php";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $cat  = $_POST['category'];
    $qty  = $_POST['quantity'];
    $sup  = $_POST['supplier'];
    $exp  = $_POST['expiry'];

    mysqli_query($conn, "INSERT INTO products 
    (product_name, category, quantity, supplier, expiry_date)
    VALUES ('$name','$cat','$qty','$sup','$exp')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>Add Product</h2>

<form method="POST">
    <input name="name" placeholder="Product Name" required><br><br>
    <input name="category" placeholder="Category" required><br><br>
    <input name="quantity" type="number" placeholder="Quantity" required><br><br>
    <input name="supplier" placeholder="Supplier" required><br><br>
    <input name="expiry" type="date" required><br><br>

    <button name="add">Add Product</button>
</form>

</body>
</html>