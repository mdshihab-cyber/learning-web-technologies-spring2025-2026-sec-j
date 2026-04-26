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
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <a href='product_list.php'>back</a> |
    <a href='../controller/logout.php'>Logout</a>
    <br>

    <p><strong>ID:</strong> <?php echo $product['id']; ?></p>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($product['name']); ?></p>
    <p><strong>Price:</strong> <?php echo htmlspecialchars($product['price']); ?></p>

</body>
</html>
