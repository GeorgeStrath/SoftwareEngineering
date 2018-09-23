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
			header("Location: ../Signup.php?Signup=empty");
			exit();
		}else{
			$sql = "SELECT * FROM admin_details WHERE first_name = '$first' AND last_name = '$last'";
			$result = mysqli-query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);
			if($resultcheck < 1){
				header("Location: ../login.php?login=error");
				exit();
			}else{
				if($row = mysqli_fetch_assoc($result)){
					//De-hashing the password
					$hashedPasswordCheck = password_verify($password,$row['password']);
					header("Location: ../Signup.php?Signup=error");
					exit();
				}elseif($hashedPasswordCheck == true){
					// Log in the user here
					$_SESSION['a_first'] = $row['first_name'];
					$_SESSION['a_last'] = $row['last_name'];
					header("Location: ../Signup.php?Signup=success");
					exit();
				}
			}
		}

	}else{
		header("Location: ../Login.php?login=error");
		exit();
	}

?>