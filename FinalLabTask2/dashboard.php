<?php include 'header.php'; if(!isset($_SESSION['login'])) header('location:login.php'); ?>
<h2>Dashboard</h2>
Welcome <?php echo $_SESSION['user']; ?><br>
<a href='profile.php'>View Profile</a><br>
<a href='edit_profile.php'>Edit Profile</a><br>
<a href='picture.php'>Change Profile Picture</a><br>
<a href='change_password.php'>Change Password</a><br>
<a href='logout.php'>Logout</a>