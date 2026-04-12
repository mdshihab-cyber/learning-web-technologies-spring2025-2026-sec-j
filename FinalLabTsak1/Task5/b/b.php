<?php
    $selected_degrees = [];
    // Check if the submit button was clicked [cite: 60]
    if(isset($_POST['submit']) && isset($_POST['degree'])){
        $selected_degrees = $_POST['degree']; // Capturing array of degrees [cite: 51, 67]
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 5B - Checkbox Current Page</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> BSc
            <input type="checkbox" name="degree[]" value="MSc"> MSc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php 
        if(!empty($selected_degrees)){
            echo "Selected Degrees: ";
            foreach($selected_degrees as $d){
                echo $d . " ";
            }
        }
    ?>
</body>
</html>