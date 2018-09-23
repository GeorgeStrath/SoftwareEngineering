<?php
	if(isset($_POST['submit'])){
		include_once 'db.con.php';

		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		//Error handlers
		//Check for empty fields
		if(empty($first) ||empty($last) ||empty($password)){
			header("Location: ../Signup.php?Signup=empty");
			exit();
		}else{
			//Check if input characters are valid
			if(!preg_match("/^[a-zA-Z]*$", $first)||(!preg_match("/^[a-zA-Z]*$", $last)){
				header("Location: ../Signup.php?Signup=invalid");
				exit();
			}/*else{
				//Check if email is valid
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					header("Location: ../Signup.php?Signup=invalidemail");
					exit();
				}else{
					//Check userID has not been repeted
					$sql = "SELECT * FROM admin_details WHERE admin_id = '$uid'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if($resultCheck >0){
						header("Location: ../Signup.php?Signup=usertaken");
						exit()
					}*/else{
						//hashing the password
						$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO admin_details(first_name,last_name,password) VALUES('$first','$last','$hashedpassword');";
						mysql_query($conn, $sql);
						header("Location: ../Signup.php?Signup=success");
						exit();
					}
				}
			}
		}
		
	}else{
		header("Location: ../Signup.php");
		exit();
	}
