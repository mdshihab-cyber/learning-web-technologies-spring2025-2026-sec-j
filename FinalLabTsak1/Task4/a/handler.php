<?php
    if(isset($_POST['submit'])){
        // Check if a radio button was selected
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            echo "<h1>Handler Page</h1>";
            echo "Selected Gender: " . $gender;
        } else {
            echo "No gender selected!";
        }
    }
?>