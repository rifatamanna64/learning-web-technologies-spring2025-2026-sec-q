<?php
$selected = [];

if(isset($_POST['submit'])){
    if(!isset($_POST['degree'])){
        echo "No degree selected!";
    } else {
        $selected = $_POST['degree'];

        foreach($selected as $d){
            echo $d . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Degree Form</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>DEGREE</legend>

        <input type="checkbox" name="degree[]" value="SSC"
        <?php if(in_array("SSC", $selected)) echo "checked"; ?>> SSC

        <input type="checkbox" name="degree[]" value="HSC"
        <?php if(in_array("HSC", $selected)) echo "checked"; ?>> HSC

        <input type="checkbox" name="degree[]" value="BSc"
        <?php if(in_array("BSc", $selected)) echo "checked"; ?>> BSc

        <input type="checkbox" name="degree[]" value="MSc"
        <?php if(in_array("MSc", $selected)) echo "checked"; ?>> MSc

        <br><br>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>