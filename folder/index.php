<?php
require_once"config.php";
$adminname = $_POST['adminname'];
 $password = $_POST['password'];
 $query="select * from admin where adminname='$adminname' and password='$password';";
 $users= mysqli_query($connection,$query);
 $rows=mysqli_num_rows($users);
 if($rows==1)
 {
  include "home.php";
 }
 else
 echo "unsuccessful";
?>
