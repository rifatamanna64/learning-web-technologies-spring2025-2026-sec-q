<?php include 'header.php';
if(isset($_POST['submit'])){
 $_SESSION['picture']=$_POST['pic'];
 echo 'Picture Changed';
}
?>
<form method='post'>
Picture Name:<input name='pic'><br>
<input type='submit' name='submit' value='Save'>
</form>