<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $id = intval($_REQUEST['id']);
        $name = trim($_REQUEST['name']);
        $price = trim($_REQUEST['price']);

        if($name == "" || $price == ""){
            echo "null name/price!";
        }else{
            $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
            foreach($products as &$p){
                if($p['id'] == $id){
                    $p['name'] = $name;
                    $p['price'] = $price;
                    break;
                }
            }
            $_SESSION['products'] = $products;
            header('location: ../view/product_list.php');
        }
    }else{
        echo "please submit form...";
    }

?>
