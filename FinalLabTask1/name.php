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

<form method="post">
    Name: <input type="text" name="name"
    value="<?php if(isset($name)) echo $name; ?>">
    
    <input type="submit" name="submit" value="Submit">
</form>