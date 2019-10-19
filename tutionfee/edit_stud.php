<!DOCTYPE html>
<?php
include("db.php");
//include("auth.php");

if(isset($_GET['edit_stud'])){
	$get_id = $_GET['edit_stud'];
	$get_stud = "select * from students where id = '$get_id'";
	$run = mysqli_query($con, $get_stud);
	$i = 0;
	$row = mysqli_fetch_array($run);
	$stud_id = $row['id'];
	$stud_name = $row['name'];
	$stud_course = $row['course'];
	$stud_fees = $row['fee'];
}
?>
<html>
<head>
	<title>Update Students</title>
</head>
<body>
<form method="post" action="">
	<table align="center" width="800" border="2" bgcolor="#187eae" style="border-collapse: collapse;">
	<tr align="center">
		<td colspan="7">
			<h2>Update Student</h2>
		</td>

	</tr>
	<tr>
		<td align="right"><b>Enter Student Name:</b></td>
		<td><input type="text" name="studname" size="50" value="<?php echo $row['name'];  ?>"></td>
	</tr>	
	<tr>
		<td align="right"><b>Enter Class/Standard:</b></td>
		<td><input type="text" name="class" size="20" value="<?php echo $row['course'];   ?>"></td>
	</tr>
	<tr>
		<td align="right"><b>Enter Fees:</b></td>
		<td><input type="number" name="fee" size="10" value="<?php echo $row['fee'];  ?>"></td>
	</tr>
	<tr align="center">

		<td colspan="7"><input type="submit" name="Update_stud" value="Update Student"></td>
	</tr>
	</table>
</form>
</body>
</html>

<?php

if (isset($_POST['Update_stud'])) {
$update_id = $stud_id;
$stud_name = $_POST['studname'];
$stud_class = $_POST['class'];
$stud_fee = $_POST['fee'];

$sql = "update students set name = '$stud_name', course = '$stud_class', fee = '$stud_fee' where id = '$update_id'";
$run = mysqli_query($con, $sql);
if ($run) {
			echo "<script>alert('Student data has been updated!')</script>";
			echo "<script>window.open('managestud.php?viewstud','_self')</script>";
		}
}

?>