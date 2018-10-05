<?php
	if(isset($_POST['submit'])){
		include_once 'db.con.php';

		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$id_no = mysqli_real_escape_string($conn, $_POST['id_no']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$location = mysqli_real_escape_string($conn, $_POST['location']);
		$category = mysqli_real_escape_string($conn, $_POST['category']);

		//Error handlers
		//Check for empty fields
		if(empty($first) ||empty($last) ||empty($id_no) ||empty($email) ||empty($password) ||empty($phone) ||empty($location) ||empty($category)){
			header("Location: employer.signup.php?Signup=empty");
			exit();
		}else{
			//Check if input characters are valid
			if(!preg_match("/^[a-zA-Z]*$", $first)||(!preg_match("/^[a-zA-Z]*$", $last)){
				header("Location: employer.signup.php?Signup=invalid");
				exit();
			}else{
				//Check if email is valid
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					header("Location: employer.signup.php?Signup=invalidemail");
					exit();
				}else{
					//Check id number has not been repeted
					$sql = "SELECT * FROM employer_details WHERE id_number = '$id_no' ";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if($resultCheck >0){
						$msg = "An account with that id number already exists";
						echo "<script type='text/javascript'>
						window.location.href='employer.signup.php';
						alert('$msg');
						</script>";
					}else{
						//hashing the password
						$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO employer_details(first_name, last_name, id_number, email_address, password, phone_number, location, category) VALUES('$first', '$last', '$id_no', '$email', $hashedpassword', '$phone', '$location', '$category');";
						mysql_query($conn, $sql);

						$msg = "Account Created";
						echo "<script type='text/javascript'>
						window.location.href='employer.signup.php';
						alert('$msg');
						</script>";
						/*header("Location: employer.signup.php?Signup=success");
						exit();*/
					}
				}
			}
		}
		
	}else{
		header("Location: employer.signup.php");
		exit();
	}
