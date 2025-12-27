<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Smart Inventory System</title>
    <link rel="stylesheet" href="style.css">
</head>
<section
<body>
<div class="hero">
<h1>𝓕𝓻𝓮𝓼𝓱 𝓜𝓪𝓻𝓽</h1>
</div>
</section>
<div class="section-divider"></div>
<div class="section-divider"></div>
<h2>Inventory List</h2>

<form method="GET">
    <input type="text" name="search" placeholder="Search product">
    <button type="submit">Search</button>
</form>

<br>
<a href="add.php">➕ Add Product</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Product</th>
    <th>Category</th>
    <th>Quantity</th>
    <th>Supplier</th>
    <th>Expiry</th>
    <th>Action</th>
</tr>

</div>
<?php
$search = $_GET['search'] ?? '';

$sql = "SELECT * FROM products 
        WHERE product_name LIKE '%$search%' 
        OR category LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['product_name']}</td>
        <td>{$row['category']}</td>
        <td>{$row['quantity']}</td>
        <td>{$row['supplier']}</td>
        <td>{$row['expiry_date']}</td>
        <td>
            <a href='delete.php?id={$row['id']}'>❌ Delete</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>