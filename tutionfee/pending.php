<table width="795" align="center" bgcolor="pink" border="2" style="border-collapse: collapse;">
		<tr align="center">
		<td colspan="6">
			<h2>Pending Payments</h2>
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
		<th>Status</th>
		
	</tr>
	<?php
	include("db.php");
	//include("auth.php");
	$sql = "select * from payments where pay_status = 'Pending'";
	$run = mysqli_query($con, $sql);
	$i = 0;
	while ($row = mysqli_fetch_array($run)) {
	$pend_id = $row['id'];	
	$pend_name = $row['pay_name'];
	$pend_stat = $row['pay_status'];

	?>
	<tr align="center">
		<td><?php echo "$pend_id"; ?></td>
		<td><?php echo "$pend_name";  ?></td>
		<td><?php echo "$pend_stat";   ?></td>
	</tr>
<?php  } ?>
</table>