<?php
if(isset($_POST['submit'])){
    $dd = $_POST['dd'];
    $mm = $_POST['mm'];
    $yy = $_POST['yyyy'];

    if($dd=="" || $mm=="" || $yy==""){
        echo "Null DOB!";
    } else {
        echo "DOB: $dd-$mm-$yy";
    }
}
?>

<form method="post">
    dd: <input type="text" name="dd" value="<?php if(isset($dd)) echo $dd; ?>">
    mm: <input type="text" name="mm" value="<?php if(isset($mm)) echo $mm; ?>">
    yyyy: <input type="text" name="yyyy" value="<?php if(isset($yy)) echo $yy; ?>">
    
    <input type="submit" name="submit" value="Submit">
</form>