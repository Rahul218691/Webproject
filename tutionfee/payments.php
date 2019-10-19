<table width="795" align="center" bgcolor="pink" border="2" style="border-collapse: collapse;">
		<tr align="center">
		<td colspan="6">
			<h2>Fee Payment</h2>
			<button style="background-color: black; color: white; cursor: pointer; width: 100px; height: 40px; font-size: 25px; border-radius: 5px;" type="button" class="btn" onclick="print()">Print</button>
		</td>
		
	</tr>
	<tr align="center" bgcolor="skyblue">
		<th>
			SL.NO
		</th>
		<th>
			Student Name
		</th>
		<th>Pay</th>
		<th>Edit Payment</th>
		<th>Payment Status</th>
		

	</tr>
	<?php
include("db.php");
//include("auth.php");
$sql = "select * from students";
$run = mysqli_query($con, $sql);
$i = 0;
while($row = mysqli_fetch_array($run)){
$stud_id = $row['id'];
$studname = $row['name'];
$i++;

?>
<tr align="center">
	<td><b><?php echo "$stud_id";  ?></b></td>
	<td><b><?php echo "$studname"; ?></b></td>
	<td><a style="color: blue;" href="managestud.php?payamt=<?php  echo $stud_id;  ?>">pay</a></td>
	<td><a href="managestud.php?update_fee=<?php  echo $stud_id;  ?>"><i class="fa fa-edit" style="font-size:30px"></i></a></td>
	<td><a style="color: blue;" href="managestud.php?status=<?php echo $stud_id;  ?>">status</a></td>
	</tr>
	<?php  } ?>
</table>
