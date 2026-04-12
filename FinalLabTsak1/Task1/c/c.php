<?php
    $name = "";
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Question C</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>NAME</b></legend>
            <input type="text" name="username" value="<?php echo $name; ?>" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>

    <?php 
        if($name != "") { 
            echo "Output with retained value: " . $name; 
        } 
    ?>
</body>
</html>