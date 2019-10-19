<?php

include("db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Assessment</title>
	<style type="text/css">
		.assessment{
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
			width: 100px;
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
<div class="assessment">
	<form method="post">
	<table>
		<tr>
			<td>
				Enter Student name:
			</td>
			<td>
				<input type="text" name="name" required="" class="txt" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Class:
			</td>
			<td>
				<input type="text" name="cls" required="" class="txt">
			</td>
		</tr>
		<tr>
			<td>
				Subject:
			</td>
			<td>
				<input type="text" name="sub" required="" class="txt">
			</td>
		</tr>
		<tr>
			<td>
				Date
			</td>
			<td>
				<input type="date" name="date" class="txt">
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="status" value="Pending">Pending
			</td>
			<td>
				<input type="radio" name="status" value="Done">Done
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Submit" class="btn">

			</td>
		
		</tr>
	</table>
</form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$class = $_POST['cls'];
	$sub = $_POST['sub'];
	$date = $_POST['date'];
	$stat = $_POST['status'];

	$query = "insert into assessment (name, class, subject, date, status) values ('$name', '$class', '$sub', '$date', '$stat')";
	$run = mysqli_query($con, $query);
	if ($run) {
		echo "<script>alert('Assessment data inserted!')</script>";
			echo "<script>window.open('managestud.php?assessment','_self')</script>";
	}
}
?>

