<!---- Name: Akash Mukherjee
	Dept: BCA
	Roll: 20BCA22
	Code: Connect Database
--->
<?php 
	$connection= mysqli_connect('localhost','root','','test');	#connect with DB
	if ($connection) {	#Check Connectivity
		// code...
		echo ":)";
	}
?>