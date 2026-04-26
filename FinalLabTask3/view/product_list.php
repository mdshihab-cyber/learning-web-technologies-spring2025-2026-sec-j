<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
    $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
</head>
<body>
        <h1>Products</h1>
        <a href='home.php'>back</a> |
        <a href='add_product.php'>Add Product</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <table border=1>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>ACTION</th>
            </tr>

            <?php foreach($products as $p){ ?>
            <tr>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo htmlspecialchars($p['name']); ?></td>
                <td><?php echo htmlspecialchars($p['price']); ?></td>
                <td>
                    <a href="edit_product.php?id=<?=$p['id']?>"> EDIT </a> |
                    <a href="../controller/productDelete.php?id=<?=$p['id']?>"> DELETE </a> |
                    <a href="product_details.php?id=<?=$p['id']?>"> DETAILS </a>
                </td>
            </tr>
            <?php } ?>
        </table>

</body>
</html>
