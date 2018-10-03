<?php
	include 'header.php';
?>

<h1>Search results</h1>

<div class = 'admin-list'>

<?php
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM admin_details where admin_id LIKE '%$search%' OR first_name LIKE '%$search%' OR last_name LIKE '%$search%'";
		$result = mysqli_query($conn, $sql); 
		$queryResult = mysqli_num_rows($result);

		echo "Showing ".$queryResult. " result(s):";

		if ($queryResult > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<a href='admin.php?title=".$row['admin_id']."'><div class='admin-box'><p></p>
					 <h3>".$row['admin_id']."</h3>
					 <p>".$row['first_name' ] . 
					 $row['last_name']."</p>
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