<!DOCTYPE html>
<html>
<head>
	<title>Crud Operation User List</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">CRUD APPLICATION</a>
			
		</div>
		
	</div>

	<div class="container" style="padding: 10px;">


		<div class="row">
			<div class="col-md-10"><h3>User List</h3></div>
			<div class="col-md-2">
				<a href="<?php echo base_url().'index.php/user/create';?>" class= "btn btn-primary">Create</a>
			</div>


		</div>
		

		<table class="table table-striped">
			<tr>
				
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
				
			</tr>

		

				<?php if(!empty($users)){ foreach($users as $user){?>


					<tr>
				<td><?php echo $user['user_id']?></td>
				<td><?php echo $user['user_name']?></td>
				<td><?php echo $user['user_email']?></td>
				<td>
					<a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class= "btn btn-primary">Edit</a>
				</td>
				<td>
					<a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class= "btn btn-danger">Delete</a>
				</td>
			</tr>



				<?php }}else {?>
					<tr>
					<td colspan="5">Record not found</td>
				</tr>

				<?php }?>






		</table>




		
	</div>

</body>
</html>