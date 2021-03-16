<?php
require('user.php');
if($_POST){
$email= strip_tags(trim($_POST['email']));
$password= strip_tags($_POST['pwd']);

$obj= new user;
//$obj->login($email, $password);
 $customer_id = $obj->login($email, $password);
 if($customer_id > 0){
    $_SESSION['custid'] = $customer_id;
    header('location:user_dashboard.php');
   }else{
       header('location:index.php');
 }

}else{
    header('location:index.php');
}
?>