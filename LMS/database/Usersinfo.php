<?php 
	session_start();
	error_reporting(0);
	include 'connect.php';
	

	if(!isset($_SESSION['Username'])){
		header("Location: login.php");
	}else{

	}

        $currentUser = $_SESSION['Username'];
						$sql = "SELECT * FROM userinfo WHERE Username = '$currentUser'";

						$gotResults = mysqli_query($connect, $sql);
						if($gotResults){
							if(mysqli_num_rows($gotResults)>0){
								while ($row = mysqli_fetch_array($gotResults)) {
								// print_r($row['Username']);
								echo "<img style='width: 100px;  display: block; margin-left: auto; margin-right: auto; border: 2px;border-radius: 50%;' src='images/".$row['image']."' >";
								echo $row['Firstname'];
								echo $row['Lastname'];
								}
							}
						}
				?>		