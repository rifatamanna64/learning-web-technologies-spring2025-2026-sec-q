<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];

    if($name == ""){
        echo "Null name!";
    } else {
        echo "Name: " . $name;
    }
}
?>