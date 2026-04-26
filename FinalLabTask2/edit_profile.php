<?php include 'header.php';
if(isset($_POST['submit'])){
 $_SESSION['user']=$_POST['name'];
 $_SESSION['email']=$_POST['email'];
 echo 'Updated';
}
?>
<form method='post'>
Name:<input name='name' value='<?php echo $_SESSION['user']; ?>'><br>
Email:<input name='email' value='<?php echo $_SESSION['email']; ?>'><br>
<input type='submit' name='submit' value='Save'>
</form>