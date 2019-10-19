<?php

include("db.php");
//include("auth.php");
if (isset($_GET['edit_asses'])) {
	$get_id = $_GET['edit_asses'];

	$get_stud = "select * from assessment where id = '$get_id'";
	$run = mysqli_query($con, $get_stud);
	$row = mysqli_fetch_array($run);
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Assessment</title>
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
				<input type="text" name="name" required="" class="txt" autocomplete="off" value="<?php  echo $row['name'];  ?>">
			</td>
		</tr>
		<tr>
			<td>
				Class:
			</td>
			<td>
				<input type="text" name="cls" required="" class="txt" value="<?php  echo $row['class']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				Subject:
			</td>
			<td>
				<input type="text" name="sub" required="" class="txt" value="<?php echo $row['subject']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				Date
			</td>
			<td>
				<input type="date" name="date" class="txt" value="<?php  echo $row['date']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="status" value="Pending" <?php if ($row['status']=='Pending') {
             echo "checked";
            }  ?>>Pending
			</td>
			<td>
				<input type="radio" name="status" value="Done" <?php if ($row['status']=='Done') {
             echo "checked";
            }  ?>>Done
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="update" value="Update" class="btn">

			</td>
		
		</tr>
	</table>
</form>
</div>
</body>
</html>
<?php
if (isset($_POST['update'])) {
	$assid = $_GET['edit_asses'];
	$name = $_POST['name'];
	$class = $_POST['cls'];
	$sub = $_POST['sub'];
	$date = $_POST['date'];
	$stat = $_POST['status'];
	$sql = "update assessment set id = '$assid', name = '$name', class = '$class', subject = '$sub', date = '$date', status = '$stat' where id = '$assid'";


	$run = mysqli_query($con, $sql);
	if ($run) {
			echo "<script>alert('Fee data updated!')</script>";
			echo "<script>window.open('managestud.php?assessdet','_self')</script>";
		}

}


?>
