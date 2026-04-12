<?php
$bg = isset($_POST['blood_group']) ? $_POST['blood_group'] : "";
?>
<form method="post">
    <fieldset style="width: 300px;">
        <legend><b>BLOOD GROUP</b></legend>
        <select name="blood_group">
            <option value="A+" <?php if($bg == "A+") echo "selected"; ?>>A+</option>
            <option value="B+" <?php if($bg == "B+") echo "selected"; ?>>B+</option>
            <option value="O+" <?php if($bg == "O+") echo "selected"; ?>>O+</option>
        </select>
        <hr><input type="submit" name="submit">
    </fieldset>
</form>