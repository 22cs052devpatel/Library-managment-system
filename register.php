

<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"login");
	$query = "insert into input values('','$_POST[First_name]','$_POST[Last_name]','$_POST[Email_address]','$_POST[Password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "index.php";
</script>






