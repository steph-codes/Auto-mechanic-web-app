<?php
require('tech.php');
if($_POST){
$email= strip_tags(trim($_POST['email']));
$password= strip_tags($_POST['pwd']);

$obj= new tech;
//$obj->login($email, $password);
 $technicians_id = $obj->login($email, $password);
 if($technicians_id > 0){
    $_SESSION['custid'] = $technicians_id;
    header('location:tech_dashboard.php');
   }else{
       header('location:tech_login.php');
 }

}else{
    header('location:tech_login.php');
}
?>