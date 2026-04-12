<?php
if(isset($_POST['submit']) && isset($_POST['degree'])){
    foreach($_POST['degree'] as $value){
        echo $value . " ";
    }
}
?>