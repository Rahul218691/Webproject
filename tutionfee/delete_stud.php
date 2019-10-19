<?php   
include("db.php");
//include("auth.php");
if (isset($_GET['delete_stud'])) {
	$del_id = $_GET['delete_stud'];
	//echo "$del_id";
	$del_stud = "delete from students where id = '$del_id'";
	//echo "$del_stud";
	$del_run = mysqli_query($con, $del_stud);
	if ($del_run) {
	echo "<script>alert('Student data has been deleted!')</script>";
	echo "<script>window.open('managestud.php?viewstud','_self')</script>";
	}
}




?>