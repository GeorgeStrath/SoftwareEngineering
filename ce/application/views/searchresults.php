<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<div class="container">
	<table>

	<?php foreach ($search as $result){?>
		<tr style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3); ">
			<td><img src="<?php echo base_url()?>/uploads/<?php echo $result['photo']?>" width="300px" height="250px"></td>
			<td><strong>Name:</strong><?php echo $result['full_names']?><br><br>
				<strong><i class="fas fa-map-marked-alt" style="color: skyblue;"></i> Location:</strong><?php echo $result['location']?><br><br>
					<strong><i class="fas fa-wrench" style="color: skyblue;"></i> Skill: <?php echo $result['skill']?></strong></td>
			<td><pre>                                                  </pre></td>
			<td><button class="btn btn-info btn-block"><i class="far fa-eye"></i><a href="<?php echo site_url('/action/viewyee/'.$result['employee_id']);?>" style="text-decoration: none; color: white"> View</a></button><br>
					<strong>Category:</strong><?php echo $result['category']?><br><br>
					<strong>Rating:</strong><?php echo $result['rate']?>/5
			</td>			
		</tr>
				
	<?php } ?>
	</table>
	</div>
</body>
</html>