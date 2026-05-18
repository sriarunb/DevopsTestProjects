<?php 
session_start();
unset($_SESSION["username"]);
session_destroy();

?>
<script>
alert('logout');
document.location="login/login.php";
</script>