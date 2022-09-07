<?php
  session_start();

  $server = "localhost";
  $usern = "root";
  $password = "";
 
  $con = mysqli_connect($server, $usern, $password);
  mysqli_select_db($con,'registration');
  $name=$_POST['username'];
  $pass=$_POST[ 'password'];
  $a="select*from user where username='$name' && password='$pass'";
  $result=mysqli_query($con,$a);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    $_SESSION['username']=$name;
    header('location:sign.php');
  
  }else{
    header('location:home.php');
    
  } 



?>