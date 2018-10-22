<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		#bgimage{

			background: url(<?php echo base_url();?>assets/yerhome.png);
			background-size: 1366px;			
			background-repeat: no-repeat;
			background-position: center;
			height:730px;
			position: fixed;
			margin-left: 15px;
			filter: brightness(90%);
			
				

		}
		#formstyle{
			margin-top: 300px;
		}
		.btn-primary-outline {
		background-color: transparent;
		border-color: #ccc;
		}
		.btn-primary-outline:hover
		{
			color: transparent;
		}
		

	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-12 " id="bgimage"><div class="row text-center"><h1 style="margin-left: 505px;"> Welcome,<?php echo $this->session->userdata('username');?></h1>
			<button class="btn btn-outline-light" style="margin-left: 429px;"><a href="<?php echo base_url()?>enter/logout" style="text-decoration: none; color: black;">Logout</a></button>
			<button class="btn btn-outline-light" style="margin-left: 2px;"><a href=""><i class="fa fa-cog fa-spin" style="color: black"></i></a></button>
				</div>
			<form id="formstyle" method="POST" action="<?php echo base_url();?>action/search">
			<div class="row text-center" >
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<input type="text" name="location" placeholder="Enter the location" class="form-control" autofocus required>
				</div>
				<div class="col-md-4">
					<input type="text" name="skill" placeholder="Enter the required skill" class="form-control" required>
				</div>
				<div class="col-md-2"></div>
			</div><br><br>
			<div class="row " >
				<div class="col-md-4 offset-md-4">
					<button type="submit" class="btn btn-info btn-block" >Search</button>
				</div>
				
			</div>
				
				</form>
			

		</div>
	</div>

</body>
</html>
