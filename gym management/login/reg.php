<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Dazzling Multi Forms Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dazzling Multi Forms Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css2/flexslider.css" type="text/css" media="screen" property="" />
<!-- js -->
<script src="js2/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<?php include('cal.php'); ?>
<body>
	<div class="main">
		<h1>PATIL'S GYM DHARWAD</h1>
		
		<div class="w3_agile_main_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="agileits_w3layouts_main_grid">
								<h3>Register Form</h3>
								<form action="customer_details_insert.php" autocomplete="off"  method="post" enctype="multipart/form-data">
									<span>
										<label>Name</label>
										<input name="customer_name" type="text" placeholder=" Name" required="">
									</span>
									<span>
										<label>Address</label>
										<input name="customer_address" type="text" placeholder="Address" required="">
									</span>
									<span>
										<label>City</label>
										<input name="customer_city" type="text" placeholder="City" required="">
									</span>
									<span>
										<label>Mobile</label>
										<input name="contact_number" type="text" placeholder="Mobile Number" required="">
									</span>
									<span>
										<label>Email-id</label>
										<input name="email_id" type="text" placeholder=" Email" required="">
									</span>
									<span>
										<label>Weight</label>
										<input name="weight" type="text" placeholder="Weight" required="">
									</span>
									<span>
										<label>Health Details</label>
										<input name="health_details" type="text" placeholder="Health Details" required="">
									</span>
									<span>
										<label>Gender</label>
										<select onchange="change_country(this.value)" name="gender" required="">
											<option value="MALE">MALE</option>
											<option value="FEMALE">FEMALE</option>         
											
										</select>
									</span>
									<span>
										<label>DOB</label>
										<?php	
					
      $date_default = "";
     
      
	  
       $date_default =date('Y-m-d');
      //$year=date('Y');
	  //$syear=date('Y')+2;



	  $myCalendar = new tc_calendar("date_of_birth", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      //$myCalendar->dateAllow("$syear-01-01","$year-01-01");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1950, date('Y')-18);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>
									</span>
									<span>
										<label>Height</label>
										<input name="height" type="text" class="form-control" placeholder="Hight " required="">
									</span>
									<span>
										<label>Password</label>
										<input name="password" type="text" placeholder="Password " required="">
									</span>
									<span>
										<label>Photo</label>
										<input name="photo" type="file" class="form-control" placeholder="PHOTO" required="" id="photo">
									</span>
									
									<div class="w3_agileits_submit">
										<input type="submit" value="submit">
										<input type="reset" value="reset">
									</div>
								</form>
							</div>
						</li>
						
						
					</ul>
				</div>
			</section>
		</div>
		<div class="agileits_copyright">
			<p>© 2017 Dazzling Multi Forms. All rights reserved | Design by <a href="#">Mounika And Roopa </a></p>
		</div>
	</div>
<!-- password -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}
	</script>
<!-- password -->
<!-- flexSlider -->
	<script defer src="js2/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider -->
</body>
</html>