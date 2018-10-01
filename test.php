<?php
	include 'db.con.php';
	include 'header.php';
?>

<form action="search.php" method="POST">
	<input type="text" name="search" placeholder="Search">
	<button type='submit' name='submit-search'>Search</button>
</form>

<h1>Admin details</h1>
<h2>Admins:</h2>
<div class = 'admin-list'>
	<?php
		$sql = "SELECT * FROM admin_details";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if($queryResults > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<div>
					 <p>".$row['admin_id']."</p>
					 <p>".$row['first_name']. 
					 $row['last_name']."</p>
					 <br><br>
				</div>"	;
			}
		}
	?>
</div>

</body>
</html>