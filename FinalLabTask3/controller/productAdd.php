<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $name = trim($_REQUEST['name']);
        $price = trim($_REQUEST['price']);

        if($name == "" || $price == ""){
            echo "null name/price!";
        }else{
            // load existing products from session or initialize
            $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
            $newId = 1;
            if(count($products) > 0){
                $ids = array_column($products, 'id');
                $newId = max($ids) + 1;
            }

            $product = ['id'=>$newId, 'name'=>$name, 'price'=>$price];
            $products[] = $product;
            $_SESSION['products'] = $products;

            header('location: ../view/product_list.php');
        }
    }else{
        echo "please submit form...";
    }

?>
