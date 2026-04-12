<?php
    $dob = "";
    if(isset($_POST['submit'])){
        $dob = $_POST['dd'] . "/" . $_POST['mm'] . "/" . $_POST['yyyy'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 3B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>DATE OF BIRTH</b></legend>
            <input type="number" name="dd" style="width: 40px;" /> /
            <input type="number" name="mm" style="width: 40px;" /> /
            <input type="number" name="yyyy" style="width: 60px;" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
    <?php if($dob != "//") echo "DOB: " . $dob; ?>
</body>
</html>