<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="jumbotron text-center"><h1>Your data</h1></div>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form method="POST" action="<?php echo base_url()?>enter/updateyer/" enctype="multipart/form-data">
				<?php 
					foreach ($emyerdata as $row):?>
						<form method="POST" action="" enctype="multipart/form-data">
					Employee id<br>	
					<input type="text" name="id" value="<?php echo $row['employer_id'];?>"   class="form-control" required><br>
					Full Name<br>	
					<input type="text" name="name" value="<?php echo $row['full_names'];?>"   class="form-control" required><br>
					Current Photo:<?php echo $row['photo'];?><br>	
					<input type="file" name="photo" required><br>
					Id Number<br>	
					<input type="text" name="idnum" value="<?php echo $row['id_number'];?>"   class="form-control"required ><br>
					Email Address<br>	
					<input type="text" name="email" value="<?php echo $row['email_address'];?>"class="form-control" required readonly><br>					
					Location<br>	
					<input type="text" name="location" value="<?php echo $row['location'];?>"   class="form-control" required><br> 				
					Phone number<br>	
					<input type="text" name="pnum" value="<?php echo $row['phone_number'];?>"   class="form-control" required><br>
					Category<br>	
					<input type="text" name="category" value="<?php echo $row['category'];?>"   class="form-control" required><br>
					Rate<br>	
					<input type="text" name="rate" value="<?php echo $row['rating'];?>"   class="form-control" required><br>	
					<button class="btn btn-info btn-block" type="submit">Update</button><br>

					<?php endforeach;  ?>
					
			

	</form>
	</div>
	</div>
</body>
</html>