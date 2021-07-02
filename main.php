<?php

session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name = $_POST['uname'];
$email = $_POST['e-mail'];
$password = $_POST['pass'];
$profile = $_POST['profile'];
$s = "select * from user where email='$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"User already exists";
}
else{
    $reg= "insert into user(name, email, password, profile) values ('$name','$email','$password','$profile')";
    mysqli_query($con, $reg);
    // echo "Registration successfull";
    header('location:Log.html');
}
?>