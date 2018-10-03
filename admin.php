<?php
	include 'db.con.php';
	include 'header.php';
?>



<h1>Admin details</h1>
<h2>Admins:</h2>
<div class = 'admin-list'>
	<?php
		$sql = "SELECT * FROM admin_details";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if($queryResults > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<div class='admin-box'><p></p>
					 <p>".$row['admin_id']."</p>
					 <p>".$row['first_name'] . 
					 $row['last_name']."</p>
					 <br>
				</div>"	;
			}
		}
	?>
</div>

</body>
</html>