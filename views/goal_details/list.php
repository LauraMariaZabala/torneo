<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Admin goal details</h1>
	</section>
	<section class="mb-3 ml-3">
		<a href="?controller=goal_details&method=new" class="btn btn-primary">New</a>
	</section>

	<section class="col-md-12 table-responsive">
		<table class="table table-striped table-hover">
			<thead class="thead-dark">
				<tr>
				  <th>Id</th>
					<th>match no</th>
					<th>player Id</th>
					<th>team Id</th>
					<th>goal time</th>
					<th>goal type</th>
					<th>play stage</th>
					<th>goal schedule</th>
					<th>goal half</th>
		           <th class="text-right" >Acciones</th>
	            </tr>
        	</thead>
	   <tbody>
	     <?php foreach($goal_details as $goal_details) : ?>
		<tr>
			<td><?php echo $goal_details->goal_id?></td>
			<td><?php echo $goal_details->match_no?></td>
			<td><?php echo $goal_details->player_id?></td>
			<td><?php echo $goal_details->team_id?></td>
			<td><?php echo $goal_details->goal_time?></td>
			<td><?php echo $goal_details->goal_type?></td>
			<td><?php echo $goal_details->play_stage?></td>
			<td><?php echo $goal_details->goal_schedule?></td>
			<td><?php echo $goal_details->goal_half?></td>
			
			<td class="text-right">
					<a href="?controller=goal_details&method=edit&goal_id=<?php echo $goal_details->goal_id;?>" class="btn btn-secondary">Edit</a>
					<a href="?controller=goal_details&method=delete&goal_id=<?php echo $goal_details->goal_id;?>" class="btn btn-danger">Remove</a>

			</td>
		</tr>
	<?php endforeach ?>
			</tbody>
		</table>
	</section>
</main>
