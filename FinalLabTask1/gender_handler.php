<?php
if(isset($_POST['submit'])){
    $gender = $_POST['gender'];

    if($gender == ""){
        echo "No gender selected!";
    } else {
        echo "Gender: " . $gender;
    }
}
?>