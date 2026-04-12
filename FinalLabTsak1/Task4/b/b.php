<?php
    $selected = "";
    if(isset($_POST['submit']) && isset($_POST['gender'])){
        $selected = $_POST['gender'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 4B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>GENDER</b></legend>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    <?php if($selected != "") echo "Selected: " . $selected; ?>
</body>
</html>