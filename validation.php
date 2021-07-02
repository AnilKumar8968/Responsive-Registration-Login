<?php

session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name = $_POST['uname'];
$email = $_POST['e-mail'];
$password = $_POST['pass'];
$profile = $_POST['profile'];
$s = "select * from user where email='$email' && password= '$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:WelcomePage.php');
}
else{
    header('location:Log.html');
}
?>