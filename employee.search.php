<?php
	include 'db.con.php';
	include 'header.php';
?>

<form action="employee.search.results.php" method="POST">
	<input type="text" name="employeeSearch" placeholder="Search">
	<button type='submit' name='submit-search'>Search</button>
</form>

<h1>ProfShop</h1>
<h2>Employees:</h2>
<div class = 'admin-list'>
	<?php
		$sql = "SELECT * FROM employee_details";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if($queryResults > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<div class='admin-box'><p></p>
					 <a href='employee.profile.php'><form class='profile_preview_form'><img height='200px' width='160px' src='".$row['photo']."'>
					 
					 <p> Name: ".$row['first_name'].
					 $row['last_name']."</p>
					 <p>Email Address: ".$row['email_address']."</p>
					 <p>Located at: ".$row['location']."</p>
					 <p>Occupation: ".$row['skill']."</p>
					 <p>Category: ".$row['category']."</p>
					 <p>Rating: ".$row['rate']."</p>
					 <p>See Portfolio: <a href='admin.php?title=12340003'>".$row['portfolio']."</p></a>
					 <br></form><hr></a>
				</div>"	;
			}
		}
	?>
</div>

</body>
</html>