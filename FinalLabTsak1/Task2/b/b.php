<?php
    $email = "";
    if(isset($_POST['submit'])){
        $email = $_POST['useremail'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 2B</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>EMAIL</b></legend>
            <input type="email" name="useremail" /> <b>i</b>
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
    <?php if($email != "") echo "Email on current page: " . $email; ?>
</body>
</html>