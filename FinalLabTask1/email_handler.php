<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    if($email == ""){
        echo "Null email!";
    } else {
        echo "Email: " . $email;
    }
}
?>