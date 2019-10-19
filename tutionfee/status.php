<?php

include("db.php");
//include("auth.php");
if (isset($_GET['status'])) {
	$get_id = $_GET['status'];
	$sql = "select * from payments where id = '$get_id'";
	$run = mysqli_query($con, $sql);
	$i =0;
	$row = mysqli_fetch_array($run);

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Status</title>
	<style type="text/css">
		.container{
			width: 400px;
			height: 200px;
			position: absolute;
			top: 30%;
			left: 40%;
			border:1px solid black;
			border-radius: 10px;
		}
		h1{
			text-align: center;
		}

	</style>
</head>
<body>
<div class="container">
	<h1>Payment Status</h1>
	
	<p><?php echo $row['pay_status'];  ?></p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="managestud.php?payments">Go Back</a>
</div>

</body>
</html>