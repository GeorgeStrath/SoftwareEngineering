<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap4/css/bootstrap.css">
</head>
<body>
	 <?php if ($this->session->flashdata('user_loggedin')){?>
            <?php echo "<div class='alert alert-success alert-dismissible fade show'> 
            <button class='close' type='button' data-dismiss='alert'>x</button>
            ".$this->session->flashdata('user_loggedin')."
            </div>"; ?>

        <?php } ?>
		
		<div class="jumbotron text-center"><h1>Your data</h1>
			<h3>Let's improve your profile</h3></div>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form method="POST" action="<?php echo base_url()?>enter/updateyee/" enctype="multipart/form-data">
				<?php 
					foreach ($employees as $row):?>

						
					<input type="hidden" name="id" value="<?php echo $row['employee_id'];?>"   class="form-control" required><br>
					<?php $this->session->set_userdata('userid',$row['employee_id']);?>					
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
					Portfolio(tell me everything about you career)<br>	
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
						
					<input type="hidden" name="rate" value="<?php echo $row['rate'];?>"   class="form-control" required><br>	
					<button class="btn btn-info btn-block" type="submit">Update</button><br>

					<?php endforeach;  ?>
					
			

	</form>
	</div>
	</div>

</body>
</html>