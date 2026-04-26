<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
    $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
    $product = null;
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        foreach($products as $p){
            if($p['id'] == $id){
                $product = $p;
                break;
            }
        }
    }
    if(!$product){
        echo "Product not found";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
</head>
<body>
        <h1>Edit Product</h1>
        <a href='product_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/productEdit.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>" />
            Name:  <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>"/> <br>
            Price: <input type="text" name="price" value="<?php echo htmlspecialchars($product['price']); ?>"/> <br>
                   <input type="submit" name="submit" value="Update"/>
        </form>
</body>
</html>
