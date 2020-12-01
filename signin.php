<?php
session_start();
header('location:index.html');
$con = mysqli_connect('localhost','epiz_27357043','BO8NE3kkNY');

mysqli_select_db($con,'epiz_27357043_Naresh981');

$mail = $_POST['email'];
$pass = $_POST['pass'];

$s = " select * from User where email ='$mail'";

$result = mysqli_query($con, $s);
 
$num = mysqli_num_rows($result);

if($num == 1){
    echo "email already registered"
}else{
    $reg = "insert into User(email,password) values('$email','$pass')"
    mysqli_query($con,$reg);
    echo('registration done')
}

?>