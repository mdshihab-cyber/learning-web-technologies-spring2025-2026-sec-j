<?php
    $bg = "";
    if(isset($_POST['submit'])){
        $bg = $_POST['blood_group']; // Retrieve selection from dropdown [cite: 63, 414]
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 6B - Dropdown Current Page</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>BLOOD GROUP</b></legend>
            <select name="blood_group">
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php 
        if($bg != ""){
            echo "Your Blood Group is: " . $bg;
        }
    ?>
</body>
</html>