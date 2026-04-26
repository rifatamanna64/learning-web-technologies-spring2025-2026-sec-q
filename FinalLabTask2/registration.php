<?php include 'header.php';
if(isset($_POST['submit'])){
 $_SESSION['user']=$_POST['name'];
 $_SESSION['email']=$_POST['email'];
 $_SESSION['password']=$_POST['password'];
 $_SESSION['picture']='default.png';
 echo 'Registration Successful';
}
?>
<form method='post'>
Name:<input name='name'><br>
Email:<input name='email'><br>
Password:<input type='password' name='password'><br>
<input type='submit' name='submit' value='Register'>
</form>