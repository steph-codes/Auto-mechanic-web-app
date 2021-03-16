<?php

include('user.php');
$obj = new User;
$location = $_POST['location'];
$issue = $_POST['issue'];
if(!isset ($_SESSION['custid'])){
    header("Location:index.php");
}
header("Location:order.php");

$id = $_SESSION['custid'];
$obj->request($location, $issue,$id);



?>