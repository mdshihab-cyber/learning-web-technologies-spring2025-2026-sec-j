<?php
$selected = isset($_POST['degree']) ? $_POST['degree'] : [];
?>
<form method="post">
    <fieldset style="width: 300px;">
        <legend><b>DEGREE</b></legend>
        <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC", $selected)) echo "checked"; ?>> SSC
        <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array("HSC", $selected)) echo "checked"; ?>> HSC
        <input type="checkbox" name="degree[]" value="BSc" <?php if(in_array("BSc", $selected)) echo "checked"; ?>> BSc
        <input type="checkbox" name="degree[]" value="MSc" <?php if(in_array("MSc", $selected)) echo "checked"; ?>> MSc
        <hr><input type="submit" name="submit">
    </fieldset>
</form>