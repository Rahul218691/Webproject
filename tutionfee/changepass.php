<?php

include("db.php");
//include("auth.php");
if (isset($_GET['changepass'])) {
	$sql = "select * from admin";
	$run = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($run);
	$email = $row['email'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Change Password</title>
	<style type="text/css">
		.payment{
			width: 500px;
			height: 400px;
			
			position: absolute;
			top: 200px;
			left: 500px;
			padding: 15px;
			font-size: 30px;
			margin:10px auto;
		}
		.btn{
			background-color: black;
			color: white;
			border-radius: 5px;
			cursor: pointer;
			height: 40px;
			width: 150px;
		}
		.btn:hover{
			background-color: blue;
		}
		.txt{
			width: 300px;
			height: 40px;
			border-radius: 5px;
			font-size: 25px;
		}
	</style>
</head>
<body>
<div class="payment">
	<h2 style="text-align: center;">Change Your Password!</h2>
<form method="post" >
	<table>
		<tr>
			<td>
				<b>Enter Current Password:</b>
			</td>
			<td>
				<input type="password" name="current_pass" class="txt" required>
			</td>
		</tr>
	<tr>
		<td>
			<b>Enter New Password:</b>
		</td>
		<td>
			<input type="password" name="new_pass" class="txt" required>
		</td>
	</tr>
	<tr>
		<td>
			<b>Confirm Password:</b>
		</td>
		<td>
			<input type="password" name="confirm_pass" class="txt" required>
		</td>
	</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="ChangePassword" class="btn">

			</td>
		
		</tr>
	</table>
</form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$email = $row['email'];
	$current_pass = sha1($_POST['current_pass']); 
		$new_pass = sha1($_POST['new_pass']); 
		$confirm_pass = sha1($_POST['confirm_pass']);
		$sel_pass = "select * from admin where password = '$current_pass' and email = '$email'";
		$run_pass = mysqli_query($con, $sel_pass);
		$check_pass = mysqli_num_rows($run_pass); 
		
		if($check_pass==0){
		
		echo "<script>alert('Your Current Password is wrong!')</script>";
		exit();
		}
		
		if($new_pass!=$confirm_pass){
		
		echo "<script>alert('New password do not match!')</script>";
		exit();
		}
		else {
		
		$update_pass = "update admin set password ='$new_pass' where email='$email'";
		
		$run_update = mysqli_query($con, $update_pass); 
		
		echo "<script>alert('Your password was updated succesfully!')</script>";
		echo "<script>window.open('managestud.php?viewstud','_self')</script>";
		}

}


?>

