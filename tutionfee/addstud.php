<!DOCTYPE html>
<?php

include("db.php");
//include("auth.php");
?>
<html>
<head>
	<title>Add Students</title>
</head>
<body>
<form method="post" action="addstud.php">
	<table align="center" width="800" border="2" bgcolor="#187eae" style="border-collapse: collapse;">
	<tr align="center">
		<td colspan="7">
			<h2>Add New Student</h2>
		</td>

	</tr>
	<tr>
		<td align="right"><b>Enter Student Name:</b></td>
		<td><input type="text" name="studname" size="50" required></td>
	</tr>	
	<tr>
		<td align="right"><b>Enter Class/Standard:</b></td>
		<td><input type="text" name="class" size="20" required="required"></td>
	</tr>
	<tr>
		<td align="right"><b>Enter Fees:</b></td>
		<td><input type="number" name="fee" size="10" required="required"></td>
	</tr>
	<tr align="center">

		<td colspan="7"><input type="submit" name="add_student" value="Add Student"></td>
	</tr>
	</table>
</form>
</body>
</html>

<?php

if (isset($_POST['add_student'])) {
	$name = $_POST['studname'];
	$class = $_POST['class'];
	$fees = $_POST['fee'];

$sql = "insert into students (name, course, fee) values ('$name', '$class', '$fees')";

$add = mysqli_query($con, $sql);
if ($add) {
			echo "<script>alert('Student data inserted successfully!')</script>";
			echo "<script>window.open('managestud.php?viewstud','_self')</script>";
		}

}

?>