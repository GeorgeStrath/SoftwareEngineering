<?php
session_start();

	if(isset($_POST['submit'])){
		include 'db.con.php';

		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		//Error handlers
		//Check for empty fields
		if(empty($first) ||empty($last) ||empty($password)){
			header("Location: login.html?login=empty");
			exit();
		}else{
			$sql = "SELECT * FROM admin_details WHERE first_name = '$first' AND last_name = '$last'";
			$result = mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);
			if($resultcheck < 1){
				header("Location: login.php?login=error");
				exit();
			}else{
				while($row = mysqli_fetch_assoc($result)){
					//Storing in new variables
					$dbfirst = $row['first_name'];
					$dblast = $row['last_name'];
					$dbpassword = $row['password'];
				}
				if($dbfirst == $first && $dblast == $dblast && $dbpassword == $password){
					// Log in the user here
					$_SESSION['a_first'] = $row['first_name'];
					$_SESSION['a_last'] = $row['last_name'];
					$_SESSION['a_password'] = $row ['password'];
					header("Location: professionalShop.html?login=success");
					exit();
				}
			}
		}

	}else{
		header("Location: login.php?login=error");
		exit();
	}

?>