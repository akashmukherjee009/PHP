<!--  Name: Akash Mukherjee
	Dept: BCA
	Roll: 20BCA22
	Code: Search Text
--->
<?php include'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>search</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="searchdata" placeholder="Search">
		<button name="search">Search</button>
	</form>

	<?php 
		$searchdata= $_POST['searchdata'];		#store input in a veriable
		$sql= "SELECT * FROM `bca` WHERE `bca`.`user_name` LIKE '%$searchdata%'"; #SQL command
		$data= mysqli_query($connection,$sql);
		while ($row= mysqli_fetch_assoc($data)) { #loop for printing result
			// code...
			$username= $row['user_name'];
			echo "<li>$username</li>";
		}
	?>

</body>
</html>


