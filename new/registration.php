<?php
  session_start();
  header('location:login.php');
  $server = "localhost";
  $usern = "root";
  $password = "";
  $con = mysqli_connect($server, $usern, $password);
  mysqli_select_db($con,'user');
  $name=$_POST['username'];
  $pass=$_POST['password'];
  $a ="select*from user where username='$name' ";
  $result=mysqli_query($con,$a);
  $num=mysqli_num_rows($result);
  if($num==1)
    {
        header('location: home.php');
    }
  else if ($num == 0)
    {
        echo "Wrong password or username!";
    }

?>