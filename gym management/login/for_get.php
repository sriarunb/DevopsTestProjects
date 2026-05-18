<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">
<?php
include('db_connect.php');
 $uname=$_REQUEST["username"];
//echo $uname;
$sql="select * from login where binary(username)='$uname'";
//echo $sql;
$res=mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($res))
{
    $hintqtn=$row["hint_question"];
	$hintans=$row["hint_answer"];
	$pwd=$row["password"];
?>
<head>
	<title>Forgotpassword form</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Cloud Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Encode+Sans+Condensed:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>
		Hint Question :<br><?php echo " ".$hintqtn; ?>
	</h1>
	<!-- //title -->

	<!-- content -->
	<div class="container">
		<div id="clouds">
			<div class="cloud x1"></div>
			<!-- Time for multiple clouds to dance around -->
			<div class="cloud x2"></div>
			<div class="cloud x3"></div>
			<div class="cloud x4"></div>
			<div class="cloud x5"></div>
		</div>
		<!-- content form -->
		<div class="sub-main-w3">
			<form action="getpwd.php" method="post">
				<div class="form-style-agile">
					<label>
						<i class="fas fa-user"></i>
						Username

					</label>
					<div class="agile-field-txt">
					<input name="type_ans" type="text" class="input-large span10" id="username" size="50" autofocus placeholder="Enter Hint Answer"  /></div>
					<input name="db_hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>" >
                                <input name="password" type="hidden" id="password" value="<?php echo $pwd; ?>">
				</div>
			  <div class="form-style-agile">
				 
					 
				</div> 
				 
				<input type="submit" value="submit">
				
				
					 
			</form>
		</div>
		<!-- //content form -->
	</div>
	<!-- //content -->

	<!-- copyright -->
<div class="footer">
	<h2><?php	
	
}
else
{
?>
      <div align="center">
          <script type="text/javascript">
alert("Wrong Username");
document.location="login.php";
          </script>
      <?php
}
?>

</h2>
	</div>
	</body>

</html>