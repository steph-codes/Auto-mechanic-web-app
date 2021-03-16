<?php


?>

		
		<?php include('dark_header.php');?>
		<!--header-->

		<div class="container-fluid">
			<div class="row steps">
				<div  id="fimage" class="col mt-2 col-md-7">
					<img src="images/perfect.jpg"  class="col h-100" width="">
				</div>
				
				<div class="col col-md-5 ">
				
					<p class="ml-md-5 mt-md-5" id="book">Want to book an appointment?</p>

					<p class="ml-md-5 mt-md-5" id="logintext" style="display:none";>Log in to book an appointment</p>
					<div id="newuser">
						<form action="signup_submit.php" method="POST" class="ml-md-5">
							<input type="text" name="fname" class="col col-md-6 mb-2 form-control mb-2" id="" value="" placeholder="first name..." required>
					
							<input type="text" name="lname" class="col col-md-6 mb-2 form-control" id="" value="" placeholder="last name..." required>
					
							<input type="email" name="email" id="" class="col col-md-6 mb-2 form-control" value="" placeholder="www.example@gmail.com" required="">
							
							<input type="password" name="pwd" class="col col-md-6 mb-2 form-control" id="" value="" placeholder="password..." required="">
							
							<input type="text" name="phone" id="" class="col col-md-6 mb-2 form-control" value="" placeholder="+234..." required="">
							
							<input type="submit" name="" id="signin" class="mb-2 col col-md-6 form-control btn text-light "  value="Sign Up" placeholder="">
						</form>
					</div>
					<!--login-->
					<div id="user" class=""style="display:none">
						<form action="login_submit.php" method="POST" class="ml-5">
						<input type="email" name="email" class="col col-md-6 mb-2 form-control " id="" value="" placeholder="Email" required="">
						
						<input type="password" name="pwd" class="col col-md-6 mb-2 form-control" id="" value="" placeholder="password" required="">
						
						<input type="submit" name="" id="signin" class="mb-2 col col-md-6 form-control btn text-light "  value="Login" placeholder="">
						</form>
					</div>
					<p class="ml-5" id="hidetext">Already have an account?<a id="login" href="#"> log in</a></p>	
					<p class="ml-5 " id="signtext"style="display:none">Don't have an account?<a id="signintext" href="#"> Sign Up</a></p>		
					<img src="images/road_sidee.jpg" width="200" class="ml-5 mt-2" style="display: none" id="road"alt="">
				</div>			
			</div>
		</div>			

		<!--order-->
	
		<div class="container-fluid">
			<div class="row steps mt-4 ">
				<div class="col  my-5">
					<h2 class="text-center col pt-5">Book an appointment in 3 steps</h2>
					<hr class="line">
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4 text-center">
					<img src="images/orderr.png" class="mt-3" width="350" alt="">
					<h3 class="mt-5 text-center">Login or signup</h3>
					<p class="text-secondary text-center">Fill in your log in details <br>
						or create a new account to sign up<br>
					New users get 15% discount on every<br> appointment for a month</p>
				</div>
				
				<div class="col col-md-4 mt-2 text-center">
					<img src="images/fix.png"  width="280" alt="">
					<h3 class="mt-2 text-center">Meet with technician</h3>
					<p class=" text-secondary text-center ">Enter car details and describe<br>
					issues encountered.A technician would<br>call 
					to meet at your location</p>

				</div>

				<div class="col col-md-4 mt-5 ">
					<img src="images/thanks.png" class="pt-5"  width="310" alt="">
					<h3 class="mt-4 pt-2 text-center">Car Fixed</h3>
					<p class="text-secondary text-center">Congratulations, your car is fixed<br>
					drive safe.</p>
				</div>
			</div>
			

			</div>
		</div>

		<!-why choose us / services-->
	
		<div class="container-fluid" id="services">
			<div class="row  steps">
				<div class="col my-5">
				<h2 class="text-center col">Why Choose us?<h2>
				<hr class="line">
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-6 ml-md-5 mt-md-2">
					<img src="images/pocket.jpg" class=""  width="">
				</div>
				<div class="col col-lg-4 mt-5">
					<p>We do complete safety analysis;</p>
					<ul class="list-image">
						<li>Drivability Problems</li>
						<li>Tyre change</li>
						<li>Oil changes</li>
						<li>Break repair</li>
						<li>Fuel system Services</li>
						<li>Coolant Systems</li>
						<li>Emission repair Facility</li>
						<li>Fleet Maintenance</li>
						<li>Engine Work</li>
					</ul>
					<br>
					<span>Check out other services <a href="services.php">here</a></span>
				</div>
			</div>
		</div>
	
		<!-footer-->
		<?php include('footer.php');?>
		

<script type="text/javascript">
	$(document).ready(function(){
		$('#gallery').hide();
		$('#login').click(function(){
			$('#logintext').show();
			$('#user').slideDown(700);
			$('#newuser').hide();
			$('#book').hide();
			$('#hidetext').hide();
			$('#signtext').show();
			
		})
		$('#signintext').click(function(){
			$('#logintext').hide();
			$('#newuser').slideDown(700);
			$('#user').hide();
			$('#book').show();
			$('#hidetext').show();
			$('#signtext').hide();
			
		})

	})
		
</script>
</body>
</html>