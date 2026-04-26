<?php include 'header.php';
if(isset($_POST['submit'])){
 if($_POST['old']==$_SESSION['password']){
   $_SESSION['password']=$_POST['new'];
   echo 'Password Changed';
 } else echo 'Wrong Old Password';
}
?>
<form method='post'>
Old Password:<input type='password' name='old'><br>
New Password:<input type='password' name='new'><br>
<input type='submit' name='submit' value='Change'>
</form>