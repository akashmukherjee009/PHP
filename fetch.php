<!---  Name: Akash Mukherjee
	Dept: BCA
	Roll: 20BCA22
	Code: Fetch Data
---->
<?php 
	include'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fetch</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>USER_PASSWORD</th>
		</tr>
		<?php 
			$sql="SELECT * FROM `bca`";
			$fetch= mysqli_query($connection,$sql);
			while ($row= mysqli_fetch_assoc($fetch)) {	#loop for printing result

				// code...
				$db_id= $row['user_id'];
				$db_user_name= $row['user_name'];
				$db_user_password= $row['user_password'];
				echo "<tr>";	
				echo "<td>$db_id</td>";
				echo"<td>$db_user_name</td>";
				echo "<td>$db_user_password</td>";
				echo "</tr>";
			}


		?>
	</table>

</body>
</html>