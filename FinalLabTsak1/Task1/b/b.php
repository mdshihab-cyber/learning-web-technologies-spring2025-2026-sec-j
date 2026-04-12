<?php
    $name = "";
    // Check if the submit button was clicked
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        
        if($name == ""){
            echo "Name is empty!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Question B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>NAME</b></legend>
            <input type="text" name="username" value="" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>

    <?php 
        // Displaying the input on the current page
        if($name != "") { 
            echo "Current Page Output: " . $name; 
        } 
    ?>
</body>
</html>