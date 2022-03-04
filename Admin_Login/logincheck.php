<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else
{
    echo "No Connection";
}


$db = mysqli_select_db($con,'admin_db');

if(isset($_POST['submit'])){
   $username = $_POST['user'];
   $password = $_POST['pass'];

   $sql = "select * from admin where user = '$username' and pass = '$password'";

   $query = mysqli_query($con,$sql);

   $row = mysqli_num_rows($query);
      if($row == 1){
          echo"Login Successful";
          $_SESSION['user'] = $username;
          header('location:adminmainpage.php');
      }
      else{
          echo"Login Failed";
          header('location:adminlogin.php');
      }
   
   
}

?>