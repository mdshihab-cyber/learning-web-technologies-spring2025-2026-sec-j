<?php
    if(isset($_POST['submit'])){
        $email = $_POST['useremail'];
        echo "<h1>Handler Page</h1>";
        echo "Submitted Email: " . $email;
    }
?>