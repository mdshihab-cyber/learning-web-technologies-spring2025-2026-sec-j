<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>
        <h1>Add Product</h1>
        <a href='product_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/productAdd.php" enctype="multipart/form-data">
            Name:  <input type="text" name="name" value=""/> <br>
            Price: <input type="text" name="price" value=""/> <br>
                   <input type="submit" name="submit" value="Add"/>
        </form>
</body>
</html>
