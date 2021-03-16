<?php

//session_start();

include('User.php');
// if(!isset($_SESSION['custid'])){
//     header('location:User_login.php');
//   }

$obj= new User;
$col= $obj->get_completed($_SESSION['custid']);

$user_details = $obj->get_details($_SESSION['custid']);

// echo '<pre>';
// print_r($col);
// echo '<pre>';




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
		<?php include('light_header.php');?>

		<div class="container-fluid ">
			<div class="row h-100">
				<div class="col-2 text-white dashboard-bg mt-2  ">
					<h5 class="mt-2 text-center"><a href="User_dashboard.php" class="text-dark">DASHBOARD</a></h5>
					<img src="images/hero.png" class="rounded-circle avatar ml-5" height="100" alt="">

					<h5 class="mt-2 ml-2 mb-5"><i class="fas fa-user-edit "></i>Hi&nbsp;<?php echo $user_details['customer_fname']?></h5>

					<p class="text-secondary"><i class="fas fa-user-check pr-3"></i>User ID</a></p>
					<p><a href="appointment.php" class="text-secondary"><i class="far fa-calendar-check pr-4"></i>Appointments</a></p>
					<p><a href="user_completed.php" class="text-secondary"><i class="fas fa-align-left pr-4"></i>Completed Orders</a></p>
					<p><a href="order.php" class="text-secondary"><i class="fas fa-toggle-on pr-3"></i>Order status</a></p>
					<p><a href="plan.php" class="text-secondary"><i class="fas fa-align-left pr-4"></i>Plan & subscription</a></p>
					<p><a href="profile.php" class="text-secondary"><i class="fas fa-cog pr-4  "></i>Profile</a></p>
					<p><a href="upload.php" class="text-secondary"><i class="fas fa-cog pr-4  "></i>Change photo</a></p>

					<p><a href="logout.php" class="text-secondary"><i class="fas fa-adjust pr-4 pb-md-5 mb-md-5"></i>Logout</a></p>



				</div>
				<div class=" col-10">

				<div class=" col-9 mx-0 text-center">
                <div class="border-secondary col-9">
		
         
                <table class="table table-striped  mt-5  table-hover">
				
                    <tr class="col-12">
                    <?php
						// echo"<pre>";
						// print_r($col);
						// echo"</pre>";
                        foreach($col as $k=>$val){
                        ?>
						<!-- <th class="px-5 border-left"><?php echo $val['order_id']?></th> -->
                        <th class="pl- mr-2 border-left"><?php echo $val['customer_fname']." ". $val['customer_lname']; ?></th>
                        <td class="px-5 "><i class="fas fa-phone-alt"></i>+234 <?php echo $val['cust_contact']; ?></td>
						<td class="px-5"><?php echo $val['completion_date']; ?></td>
                        <td class="px-5"><?php echo $val['address']; ?></td>
						<td class="px-5"><?php echo $val['issues']; ?></td>
						<td colspan="2" class=" border-right text-right">
						<button class='btn-sm btn btn-outline-secondary mr-5 pl-3 ' href='#'>Completed</button>
						</td>
                      
       				</tr>

				<?php
		            }
	        	?><table>
		
						
						<!-- <h2 class="col text-center font-weight-light nav-color display-4 my-3"> All Appointments</h2>
					<div class="col bg-light text-center mt-3 h-100 ">
						<p class="mr-5 mt-4 text-center pt-4"><b>You can see all appointments both scheduled and completed appointments here</b></p>

            			<p class="ml-4 col  dashboard-bg p-2 col-md-11 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm btn-danger text-white ">Scheduled</button></p>


            			<p class="ml-4  col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm nav-bg text-white">completed</button></p>

            			<p class="ml-4 col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm nav-bg text-white">completed</button></p>

            			<p class="ml-4 col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm btn-danger text-white ">Scheduled</button></p>

            			<p class="ml-4 col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm nav-bg text-white">completed</button></p>

            			<p class="ml-4 col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm nav-bg text-white">completed</button></p>

            			<p class="ml-4 col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm nav-bg text-white">completed</button></p>

            			<p class="ml-4 col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm nav-bg text-white">completed</button></p>

            			<p class="ml-4 col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm nav-bg text-white">completed</button></p>

            			<p class="ml-4 col col-md-11 dashboard-bg p-2 pl-4"><b>Sam Idris</b>&nbsp;&nbsp;&nbsp; toyota camry 2009&nbsp;&nbsp;18:17:59:00  &nbsp;&nbsp;punctured tyre and malfunctioned AC coolant&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>&nbsp;+234990745678<button type="button" class="btn ml-5 btn-sm nav-bg text-white">completed</button></p> -->
					</div>
                </div>
                </div>	
					
				</div>

			</div>
		</div>


</body>
</html>
