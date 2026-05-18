<?php
session_start();
if(!(isset($_SESSION['uname'])) || ($_SESSION['uname'] == ""))
{
	?>
		<script>
			alert('Your session has been expired');
			document.location='../login/login.php';
		</script>
	<?php
}
?>