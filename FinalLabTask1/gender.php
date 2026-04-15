<?php
$gender = "";

if(isset($_POST['submit'])){
    if(empty($_POST['gender'])){
        echo "No gender selected!";
    } else {
        $gender = $_POST['gender'];
        echo "Gender: " . $gender;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gender Form</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>GENDER</legend>

        <input type="radio" name="gender" value="Male"
        <?php if($gender=="Male") echo "checked"; ?>> Male

        <input type="radio" name="gender" value="Female"
        <?php if($gender=="Female") echo "checked"; ?>> Female

        <input type="radio" name="gender" value="Other"
        <?php if($gender=="Other") echo "checked"; ?>> Other

        <br><br>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>