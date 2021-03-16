<?php
require('tech.php');
$fname = strip_tags(trim($_POST['fname']));
$lname= strip_tags(trim($_POST['lname']));
$mail = strip_tags(trim($_POST['email']));
$password = trim($_POST['pwd']);
$phone = strip_tags(trim($_POST['phone']));


$obj = new tech();
$obj->register($fname,$lname,$mail,$password,$phone);//$fname,$lname,$mail,$password,$phone
$check= $obj->register($fname,$lname,$mail,$password,$phone);
if($check){
    $_SESSION['custid'] = $check;
header('location:tech_dashboard.php');
}else{
    header('location:tech_signup.php?msg=try again');
}

?>