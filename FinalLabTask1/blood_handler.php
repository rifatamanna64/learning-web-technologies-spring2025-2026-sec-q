<?php
if(isset($_POST['submit'])){
    $blood = $_POST['blood'];

    if($blood == ""){
        echo "No blood group selected!";
    } else {
        echo "Blood Group: " . $blood;
    }
}
?>