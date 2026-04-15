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

<form method="post">
    Email: <input type="email" name="email"
    value="<?php if(isset($email)) echo $email; ?>">
    
    <input type="submit" name="submit" value="Submit">
</form>