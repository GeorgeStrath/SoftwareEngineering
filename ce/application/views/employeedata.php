<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="jumbotron text-center"><h1>Employee's data</h1></div>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form method="POST" action="<?php echo base_url()?>enter/updatelee/" enctype="multipart/form-data">
				<?php 
					foreach ($emyeedata as $row):?>

					Employee id<br>	
					<input type="text" name="id" value="<?php echo $row['employee_id'];?>"   class="form-control" required><br>
					Full Name<br>	
					<input type="text" name="name" value="<?php echo $row['full_names'];?>"   class="form-control" required><br>
					Date of birth<br>	
					<input type="text" name="dob" value="<?php echo $row['date_of_birth'];?>"   class="form-control" required><br>
					Current Photo:<?php echo $row['photo'];?><br>	
					<input type="file" name="userfile" required><br>
					Id Number<br>	
					<input type="text" name="idnum" value="<?php echo $row['id_number'];?>"   class="form-control"required ><br>
					Email Address<br>	
					<input type="text" name="email" value="<?php echo $row['email_address'];?>"class="form-control" required readonly><br>
					Portfolio<br>	
					<input type="text" name="portfolio" value="<?php echo $row['portfolio'];?>"   class="form-control" required><br>
					Location<br>	
					<input type="text" name="location" value="<?php echo $row['location'];?>"   class="form-control" required><br>
					Licence<br>	
					<input type="text" name="licence" value="<?php echo $row['license'];?>"   class="form-control" required><br>
					Skill<br>	
					<input type="text" name="skill" value="<?php echo $row['skill'];?>"   class="form-control" required><br>
					Phone number<br>	
					<input type="text" name="pnum" value="<?php echo $row['phone_number'];?>"   class="form-control" required><br>
					Category<br>	
					<input type="text" name="category" value="<?php echo $row['category'];?>"   class="form-control" required><br>
					Rate<br>	
					<input type="text" name="rate" value="<?php echo $row['rate'];?>"   class="form-control" required><br>	
					<button class="btn btn-info btn-block" type="submit">Update</button><br>

					<?php endforeach;  ?>
					
			

	</form>
	</div>
	</div>
</body>
</html>