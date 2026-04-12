<?php
    $email = "";
    if(isset($_POST['submit'])){
        $email = $_POST['useremail'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 2C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>EMAIL</b></legend>
            <input type="email" name="useremail" value="<?php echo $email; ?>" /> <b>i</b>
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
    <?php if($email != "") echo "Email: " . $email; ?>
</body>
</html>