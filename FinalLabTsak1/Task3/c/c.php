<?php
    $dd = $mm = $yyyy = "";
    if(isset($_POST['submit'])){
        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yyyy = $_POST['yyyy'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 3C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>DATE OF BIRTH</b></legend>
            <input type="number" name="dd" value="<?php echo $dd; ?>" style="width: 40px;" /> /
            <input type="number" name="mm" value="<?php echo $mm; ?>" style="width: 40px;" /> /
            <input type="number" name="yyyy" value="<?php echo $yyyy; ?>" style="width: 60px;" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
    <?php if($dd != "") echo "Retained DOB: $dd/$mm/$yyyy"; ?>
</body>
</html>