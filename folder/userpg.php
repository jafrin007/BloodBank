<?php
require_once"config.php";
$username = $_POST['user1'];
 $password = $_POST['pass1'];
 $query="select * from user where username='$username' and password='$password';";
 $users= mysqli_query($connection,$query);
 $rows=mysqli_num_rows($users);
 if($rows==1)
 {
  include "homeuser.php";
 }
 else
 echo "unsuccessful";

 ?>
