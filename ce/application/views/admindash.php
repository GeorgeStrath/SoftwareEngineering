<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<center><h1 class="jumbotron">Administrator's Dashboard</h1></center>
		<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>index.php/home">Home</a>
    </li>    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Create Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url()?>action/createemployee">Employee</a>
        <a class="dropdown-item" href="<?php echo base_url()?>action/createemployer">Employer</a>        
      </div>
    </li>
     <li class="nav-item">
      <a class="nav-link " href="<?php echo base_url()?>enter/logout">Log out</a>
    </li>
  </ul>
</nav>


<div>
<ul class="nav nav-tabs nav-justified bg-light">
  <li class="nav-item">
    <a class="nav-link " href="#employer" data-toggle="pill" >Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#employee" data-toggle="pill" >Employer</a>
  </li>
 

</ul>
  <!-- Employees Table -->
  <div class="tab-content">
    <div id="employer" class="container tab-pane active"><br>  
    <h3 class="text-center">Employees</h3>    
      <div class="table-responsive">
      <table class="table table-bordered table-sm table-hover">
      	<thead class="thead-dark">
      	<tr>
      		<th>Full Names</th>
      		<th>Date of birth</th>
      		<th>Id Number</th>
      		<th>Photo</th>
      		<th>email address</th>
      		<th>Location</th>
      		<th>Skill</th>
      		<th>Phone number</th>
      		<th>Category</th>
      		<th>Rating</th>
      		<th>Options</th>     		

      	</tr>
      	</thead>
      
      <?php 
      foreach ($employees as $employee): ?>
      		<tr>

      			<td><?php echo $employee['full_names']; ?></td>
      			<td><?php echo $employee['date_of_birth']; ?></td>
      			<td><?php echo $employee['id_number']; ?></td>
      			<td><?php echo $employee['photo']; ?></td>
      			<td><?php echo $employee['email_address']; ?></td>
      			<td><?php echo $employee['location']; ?></td>
      			<td><?php echo $employee['skill']; ?></td>
      			<td><?php echo $employee['phone_number']; ?></td>
      			<td><?php echo $employee['category']; ?></td>
      			<td><?php echo $employee['rate']; ?></td>
      			<td>
      				<button class="btn btn-info">
      					<a href="<?php echo site_url('/action/view/'.$employee['employee_id']);?>" >
      						<i class="fa fa-pencil-alt" style="color: white;"></i>
      					</a>
      				</button>
      				<button class="btn btn-danger">
      					<a href="<?php echo site_url('/enter/delete/'.$employee['employee_id']);?>">
      						<i class="fa fa-trash" style="color: white;"></i>
      					</a>
      				</button>
      			</td>


      		</tr>
      <?php endforeach; ?>

      </table>
      </div>
    </div>
    <!-- Employers table -->

    <div id="employee" class="container tab-pane fade"><br>
    	  <h3 class="text-center">Employers</h3>    
      <div class="table-responsive">
      <table class="table table-bordered table-sm table-hover">
      	<thead class="thead-dark">
      	<tr>
      		<th>Full Names</th>      		
      		<th>Id Number</th>
      		<th>Photo</th>
      		<th>email address</th>
      		<th>Location</th>      		
      		<th>Phone number</th>
      		<th>Rating</th> 
      		<th>Category</th>
      		<th>Options</th>
      		    		

      	</tr>
      	</thead>
      	 <?php 
      foreach ($employers as $employer): ?>
      		<tr>
      			<td><?php echo $employer['full_names']; ?></td>      			
      			<td><?php echo $employer['id_number']; ?></td>
      			<td><?php echo $employer['photo']; ?></td>
      			<td><?php echo $employer['email_address']; ?></td>
      			<td><?php echo $employer['location']; ?></td>      			
      			<td><?php echo $employer['phone_number']; ?></td>
      			<td><?php echo $employer['rating']; ?></td>
      			<td><?php echo $employer['category']; ?></td>
      			
      			<td>
      				<button class="btn btn-info">
      					<a href="<?php echo site_url('/action/viewlee/'.$employer['employer_id']);?>">
      						<i class="fa fa-pencil-alt" style="color: white;"></i>
      					</a>
      				</button>
      				<button class="btn btn-danger">
      					<a href="<?php echo site_url('/enter/deleteyer/'.$employer['employer_id']);?>">
      						<i class="fa fa-trash" style="color: white;"></i>
      					</a>
      				</button>
      			</td>


      		</tr>
      <?php endforeach; ?>

      </table>
      </div>
      
      

    </div>
    
  </div>
</div>
</body>
</html>
