<?php
    session_start();
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
        $new = [];
        foreach($products as $p){
            if($p['id'] != $id){
                $new[] = $p;
            }
        }
        $_SESSION['products'] = $new;
        header('location: ../view/product_list.php');
    }else{
        echo "invalid request";
    }

?>
