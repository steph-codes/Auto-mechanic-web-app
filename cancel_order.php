<?php
require('user.php');
$obj=new user();


$user_details = $obj->get_details($_SESSION['custid']);
$ord_id = $user_details['order_id'];
//$col= $obj->cancel_order($ord_id);

//header("Location:user_dashboard.php");

echo"<pre>";
print_r($user_details);
echo"</pre>";

echo $ord_id;


?>

		

</body>
</html>