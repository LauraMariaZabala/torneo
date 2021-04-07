<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Admin user</h1>
	</section>
	<section class="mb-3 ml-3">
		<a href="?controller=empleados&method=new" class="btn btn-primary">New</a>
	</section>

	<section class="col-md-12 table-responsive">
		<table class="table table-striped table-hover">
			<thead class="thead-dark">
				<tr>
					<th>username</th>
					<th>email</th>
					<th>password</th>
		           <th class="text-right" >Action</th>
	            </tr>
        	</thead>
	   <tbody>
	     <?php foreach($empleados as $empleados) : ?>
		<tr>
			<td><?php echo $empleados->username?></td>
			<td><?php echo $empleados->email?></td>
			<td><?php echo $empleados->password?></td>
			<td class="text-right">
					<a href="?controller=empleados&method=edit&id_Empleado=<?php echo $empleados->id_Empleado;?>" class="btn btn-secondary">Edit</a>
					<a href="?controller=empleados&method=delete&id_Empleado=<?php echo $empleados->id_Empleado;?>" class="btn btn-danger">Remove</a>

			</td>
		</tr>
	<?php endforeach ?>
			</tbody>
		</table>
	</section>
</main>
