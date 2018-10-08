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
				echo "<div class='admin-box'>
					 <img height='200px' width='160px' src='".$row['admin_photo']."'>
					 <h3>".$row['admin_id']."</h3>
					 <p>".$row['first_name'] . 
					 $row['last_name']."</p><hr>
				</div>"	;
			}
		}
	?>
</div>

</body>
</html>