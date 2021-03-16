<?php
//session_start();

require('User.php');
$obj = new User;

if(!isset($_SESSION['custid'])){
	header("location:index.php");
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

		<div class="container-fluid ">
			<div class="row">
				<div class="col-2 text-white dashboard-bg mt-2  ">
					<h5 class="mt-2 text-center"><a href="user_dashboard.php " class="dashboard-bg">DASHBOARD</a></h5>
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
				<div class=" col-9">
					<h2 class="col text-center my-3 nav-color">PROFILE</h2>
					<div class="col bg-light ml-5">

						<h3 class="text-center mt-5  mr-5 pr-4 font-weight-light nav-color">Update...</h3>
						<form action="user_updates.php" class="text-center" method="POST" class="ml-md-5">
							<input type='hidden' name='custid' value='<?php echo $_SESSION['custid']; ?>' />
							<input type="text" name="fname"  value="<?php echo $user_details['customer_fname'];?>"
							class=" mx-auto col col-md-6 mb-2 form-control mb-3" id="" placeholder="First name" required>

							<input type="text" name="lname" value="<?php echo $user_details['customer_lname'];?>
							"class=" mx-auto col col-md-6 mb-2 form-control mb-3" id="" placeholder="Last name" required>

							<input type="text" name="phone" class=" mx-auto col col-md-6 mb-2 form-control mb-3" id="" value=
							"<?php echo $user_details['cust_contact']?>" placeholder="New contact +234.." required>
							<br>
							<input type="radio" class="text-left"name="gender" 
							value="m" 
							id="gender-male" <?php if($user_details['gender']=='m'){echo "checked";} ?> >Male
                			<input type="radio" class="text-left" name="gender" 
							value="f" 
							id="gender-female" <?php if($user_details['gender']=='f'){echo "checked";} ?>>Female
							<br>
                			
							
							<textarea name="address" value="<?php echo $user_details['cust_address'];?>" 
							class="mt-3 col-6 text-secondary border-secondary">Enter address</textarea>
							
							<input type="password" name="pwd1" class=" mx-auto col col-md-6 mb-3 form-control"
							 id="firstpass" value="" placeholder="Create New password..." required="">

							<input type="password" name="pwd2" class="mx-auto col col-md-6 mb-3 form-control" 
							id="secondpass" value="" placeholder="Re-enter  password..." required="">
							
							<button onclick="document.location.href='user_dashboard.php'"
							 class="ml-5 btn btn-outline-secondary">Cancel</button>
                			<button class="btn nav-bg text-light">Submit</button>
							
						</form>
					</div>
					</div>
				</div>

			</div>
		</div>
</body>
</html>
