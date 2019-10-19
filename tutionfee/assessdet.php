<table width="795" align="center" bgcolor="pink" border="2" style="border-collapse: collapse;">
		<tr align="center">
		<td colspan="6">
			<h2>Assessment Details</h2>
			
		</td>
	</tr>
	<tr align="center" bgcolor="skyblue">
		<th>
			SL.NO
		</th>
		<th>
			Student Name
		</th>

		<th>Subject</th>
		<th>Date</th>
		<th>Status</th>
		<th>Edit</th>
		
	</tr>
	<?php
	include("db.php");
	//include("auth.php");
	$sql = "select * from assessment";
	$run = mysqli_query($con, $sql);
	$i = 0;
	while ($row = mysqli_fetch_array($run)) {
	$id = $row['id'];	
	$name = $row['name'];
	
	$sub = $row['subject'];
	$date = $row['date'];
	$stat = $row['status'];

	?>
	<tr align="center">
		<td><?php echo "$id"; ?></td>
		<td><?php echo "$name";  ?></td>
		
		<td><?php echo "$sub";   ?></td>
		<td><?php echo "$date";   ?></td>
		<td><?php echo "$stat";   ?></td>
		<td><a href="managestud.php?edit_asses=<?php  echo $id;  ?>"><i class="fa fa-edit" style="font-size:30px"></i></a></td></td>
	</tr>
<?php  } ?>
</table>