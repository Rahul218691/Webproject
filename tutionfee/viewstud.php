<table width="795" align="center" bgcolor="pink" border="2" style="border-collapse: collapse;">
		<tr align="center">
		<td colspan="6">
			<h2>View all Students</h2>
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
		<th>
			Class
		</th>
		<th>Fees</th>
		<th>Edit</th>
		<th>Delete</th>
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
$course = $row['course'];
$fees = $row['fee'];
$i++;

?>
<tr align="center">
	<td><?php echo "$stud_id";  ?></td>
	<td><?php echo "$studname"; ?></td>
	<td><?php    echo "$course"; ?></td>
	<td><?php  echo "$fees";  ?></td>
	<td><a href="managestud.php?edit_stud=<?php  echo $stud_id;  ?>"><i class="fa fa-edit" style="font-size:30px"></i></a></td>
	<td><a href="delete_stud.php?delete_stud=<?php  echo $stud_id;  ?>"><i class="material-icons" style="font-size:30px;color:red">delete</i></a></td>
</tr>
<?php   } ?>
</table>