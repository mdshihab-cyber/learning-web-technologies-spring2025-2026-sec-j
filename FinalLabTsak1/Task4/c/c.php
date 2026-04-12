<?php
    $selected = "";
    if(isset($_POST['submit']) && isset($_POST['gender'])){
        $selected = $_POST['gender'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 4C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>GENDER</b></legend>
            <input type="radio" name="gender" value="Male" <?php if($selected == "Male") echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if($selected == "Female") echo "checked"; ?>> Female
            <input type="radio" name="gender" value="Other" <?php if($selected == "Other") echo "checked"; ?>> Other
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    <?php if($selected != "") echo "Previously Selected: " . $selected; ?>
</body>
</html>
