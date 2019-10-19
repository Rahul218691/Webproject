<?php

include("db.php");
//include("auth.php");
if (isset($_GET['update_fee'])) {
	$get_id = $_GET['update_fee'];

	$get_stud = "select * from payments where id = '$get_id'";
	$run = mysqli_query($con, $get_stud);
	$row = mysqli_fetch_array($run);
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Amount payment</title>
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
<div class="payment">
<form method="post" >
	<table>
		<tr>
			<td>
				PayeeName:
			</td>
			<td>
				<input type="text" name="payname" value="<?php echo $row['pay_name'];  ?>" class="txt">
			</td>
		</tr>
		<tr>
			<td>
				PayeeClass:
			</td>
			<td>
				<input type="text" name="payclass" value="<?php  echo $row['pay_class'];  ?>" class="txt">
			</td>
		</tr>
		<tr>
			<td>
				PayeeFees:
			</td>
			<td>
				<input type="number" name="payfee" value="<?php  echo $row['pay_amt'];  ?>" class="txt">
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="status"  value="Paid" <?php if ($row['pay_status']=='Paid') {
             echo "checked";
            }  ?>>Paid
			</td>
		</tr>
		<tr>
		<td>
			<input type="radio" name="status" value="Pending" <?php if ($row['pay_status']=='Pending') {
             echo "checked";
            }  ?>>Pending
		</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="UpdateFee" class="btn">

			</td>
		
		</tr>
	</table>
</form>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$payid = $_GET['update_fee'];
	$name = $_POST['payname'];
	$class = $_POST['payclass'];
	$fee = $_POST['payfee'];
	$paystat = $_POST['status'];
	$sql = "update payments set id = '$payid', pay_name = '$name', pay_class = '$class', pay_amt = '$fee', pay_status = '$paystat' where id = '$payid'";


	$run = mysqli_query($con, $sql);
	if ($run) {
			echo "<script>alert('Fee data updated!')</script>";
			echo "<script>window.open('managestud.php?payments','_self')</script>";
		}

}


?>
