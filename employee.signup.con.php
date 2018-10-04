<?php
	if(isset($_POST['submit'])){
		include_once 'db.con.php';

		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$id_no = mysqli_real_escape_string($conn, $_POST['id_no']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$location = mysqli_real_escape_string($conn, $_POST['location']);
		$license = mysqli_real_escape_string($conn, $_POST['license']);
		$skill = mysqli_real_escape_string($conn, $_POST['skill']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$category = mysqli_real_escape_string($conn, $_POST['category']);

		//Error handlers
		//Check for empty fields
		if(empty($first) ||empty($last) ||empty($id_no) ||empty($email) ||empty($password) ||empty($location) ||empty($license) ||empty($skill) ||empty($phone)  ||empty($category)){
			header("Location: employee.signup.php?Signup=empty");
			exit();
		}else{
			//Check if input characters are valid
			if(!preg_match("/^[a-zA-Z]*$", $first)||(!preg_match("/^[a-zA-Z]*$", $last){
				header("Location: employee.signup.php?Signup=invalid");
				exit();
			}else{
				//Check if email is valid
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					header("Location: employee.signup.php?Signup=invalidemail");
					exit();
				}else{
					//Check id number has not been repeted
					$sql = "SELECT * FROM employee_details WHERE id_number = '$id_no' ";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if($resultCheck >0){
						$msg = "An account with that id number already exists";
						echo "<script type='text/javascript'>
						window.location.href='employee.signup.php';
						alert('$msg');
						</script>";
					}else{
						//hashing the password
						$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO employee_details(first_name, last_name, id_number, email_address, password, location, license, skill, phone_number, category) VALUES('$first', '$last', '$id_no', '$email', $hashedpassword', '$location', '$license', '$skill', '$phone', '$category');";
						mysql_query($conn, $sql);

						$msg = "Account Created";
						echo "<script type='text/javascript'>
						window.location.href='employee.signup.php';
						alert('$msg');
						</script>";
						/*header("Location: employee.signup.php?Signup=success");
						exit();*/
					}
				}
			}
		}
		
	}else{
		header("Location: employee.signup.php");
		exit();
	}
