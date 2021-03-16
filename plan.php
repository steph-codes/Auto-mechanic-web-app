<?php
require('User.php');
$obj = new User;

//session_start();
if(!isset($_SESSION['custid'])){
  header('location:index.php');
}

$user_details = $obj->get_details($_SESSION['custid']);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keyword" content="Auto-care,car servicing maintenance and repair, order and book to fix appointments">
	<meta name="description" content="Auto-care,car servicing maintenance and repairs,  its a platform where people can book appointments to fix and service their cars anytime anywhere">
	<meta name="author" content="Ogundele babatunde Stephen">
	<title>Auto-care || Home</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="js/jquery-3.5.1.min.js"></script>

</head>
<body>
		<!--nav-->
		<?php include('dark_header.php');?>
		
		<!--dashboard-->
		<div class="container-fluid ">
			<div class="row">
				<div class="col-2 text-white dashboard-bg mt-2  ">
					<h5 class="mt-2 text-center"><a href="user_dashboard.php" class="dashboard-bg">DASHBOARD</a></h5>
					<img src="<?php if($user_details['cust_avatar_img']!=''){
						 echo"images/".$user_details['cust_avatar_img'];
						}else{
						echo"images/avatar_male.png";

						 } ?>"
					class="rounded-circle avatar ml-2" height="100" width="120" alt="">

					<h5 class="mt-2 ml-2 mb-5"><i class="fas fa-user-edit "></i>&nbsp;Hi <?php echo $user_details['customer_fname']?></h5>

					<p class="text-secondary"><i class="fas fa-user-check pr-3"></i>User ID</a></p>
					<p><a href="appointment.php" class="text-secondary"><i class="far fa-calendar-check pr-4"></i>Appointments</a></p>
					<p><a href="user_completed.php" class="text-secondary"><i class="fas fa-align-left pr-4"></i>Completed Orders</a></p>
					<p><a href="order.php" class="text-secondary"><i class="fas fa-toggle-on pr-3"></i>Order status</a></p>
					<p><a href="plan.php" class="text-secondary"><i class="fas fa-align-left pr-4"></i>Plan & subscription</a></p>
					<p><a href="profile.php" class="text-secondary"><i class="fas fa-cog pr-4  "></i>Profile</a></p>
					<p><a href="upload.php" class="text-secondary"><i class="fas fa-cog pr-4  "></i>Change photo</a></p>

					<p><a href="logout.php" class="text-secondary"><i class="fas fa-adjust pr-4 pb-md-5 mb-md-5"></i>Logout</a></p>
				</div>
				<div class="col-10">
					<div class="col">
						<h2 class="display-4 mt-5 mb-5 pl-5 pr-0 mr-0 text-center nav-color">Choose a plan.</h2>
						<div class="col  mt-3 h-100">
							<p class="p-4 dashboard-bg text-justify border-primary"><b>Note :</b>There are different plan and subscription available , when you subscribe to any of these plan, your vehicle would be serviced consistently by our technician on a fixed day of the week until the plan expires. technician would only come on a fixed date except during emergency situations.<br>Also Customers get 15% discount on any service rendered, but Service charge may vary depending on the diagnosis done on the car or issues encountered.</p>

							<div class="col p-4 dashboard-bg mt-3"><h3>2 weeks plan</h3>
								<p>Your personal technician would be assigned for you, technician would also be available for service at anytime upon subscription for 14 days.</p> 
								<p><button type="button" class="btn  btn-secondary " >N10,000</button> <button type="" class="ml-3 btn btn-secondary ">Subscribe</button> </p>
							</div>

							<div class="p-4 dashboard-bg mt-3"><h3>Monthly plan</h3>
								<p>Your personal technician would be assigned for you, technician would also be available for service at anytime upon subscription for a month. 
								<p><button type="button" class="btn btn-secondary  " >N20,000</button> <button type="" class="ml-3 btn btn-secondary">Subscribe</button> </p>
								</p>
							</div>

							<div class="p-4 dashboard-bg mt-3"><h3>3 Month - plan</h3>
								<p>Your personal technician would be assigned for you, technician would also be available for service at anytime upon subscription for 3 months at a stretch.</p> 
								<p><button type="button" class="btn btn-secondary " >N30,000</button> <button type="" class="ml-3 btn btn-secondary">Subscribe</button> </p>
							</div>


						</div>
						
					</div>
					
					
				</div>

			</div>
		</div>
</body>
</html>
