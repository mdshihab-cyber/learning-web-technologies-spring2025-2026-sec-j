<?php
    if(isset($_POST['submit'])){
        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yyyy = $_POST['yyyy'];
        echo "<h1>Handler Page</h1>";
        echo "Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy;
    }
?>