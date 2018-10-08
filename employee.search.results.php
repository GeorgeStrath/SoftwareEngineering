<?php
	include 'header.php';
?>

<h1>Search results</h1>

<div class = 'admin-list'>

<?php
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['employeeSearch']);
		$sql = "SELECT * FROM employee_details WHERE employee_id LIKE '%$employeeSearch%' OR first_name LIKE '%$employeeSearch%' OR last_name LIKE '%$employeeSearch%' OR location LIKE '%$employeeSearch%'";
		$result = mysqli_query($conn, $sql); 
		$queryResult = mysqli_num_rows($result);

		echo "Showing ".$queryResult. " result(s):";

		if ($queryResult > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo 
					"<a href='Employee.profile.php?title=".$row['first_name']."'><div class='admin-box'><p></p>
					 <img class='dp'height='200px' width='160px' src='".$row['photo']."'>
					 <h3>".$row['first_name'].
					 $row['last_name' ] . "</h3>"
					 .$row['location']."</p>
					 <br>
				</div></a>"	;
			}
		}
		else {
			echo "Fungua database yako hio hatuna!";
		}
	}

?>
</div>