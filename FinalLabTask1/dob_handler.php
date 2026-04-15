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