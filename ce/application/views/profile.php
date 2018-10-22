<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container"><br>
		<table style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3); ">
			<tr>
	<?php foreach ($emyeedata as $profile):?>
		<td>
			<img src="<?php echo base_url()?>/uploads/<?php echo $profile['photo']?>" width="300px" height="250px">
			<h5><strong>Name:</strong><?php echo $profile['full_names']; ?></h5>
			<h5><strong><i class="fas fa-map-marked-alt" style="color: skyblue;"></i> Based in:</strong><?php echo $profile['location']?></h5>
			<h5><strong><i class="fas fa-wrench" style="color: skyblue;"></i> Skill:</strong> <?php echo $profile['skill']?></h5>	
		</td>
		<td><pre>           </pre></td>
		<td><h5><strong>My portfolio:</strong><br> <?php echo $profile['portfolio']?></h5></td>
		<td><pre>                                                           </pre></td>

		<td><button class="btn btn-info btn-block"><i class="fas fa-phone"></i><a href="#contact" style="text-decoration: none; color: white"> Contact</a></button><br>
			<h5><strong>Rating:</strong><br><?php echo $profile['rate']?>/5</h5>
			<h5><strong>Category:</strong><?php echo $profile['category']?></h5><br><br>
		</td>

	<?php endforeach; ?>
	</tr>
	</table>
	</div><br><br>
	<footer style="" id="contact">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form>
					Sender's email address:<br>
			<input type="text" name="sender" placeholder="Sender's email address" class="form-control" value="<?php echo $this->session->userdata('useremail');?>"><br>
			Receiver's email address:<br>
			<input type="text" name="receiver" placeholder="Receivers's email address" class="form-control" value="<?php echo $profile['email_address']?>"><br>
			<div class="form-group">
			  <label for="comment">Comment:</label>
			  <textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
			<button type="submit" class="btn btn-info btn-block"><i class="far fa-envelope"></i></button>
		</form>
			</div>
			<div class="col-md-4"></div>
		</div>
		
	</footer>
</body>
</html>