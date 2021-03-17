<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>New Goal Details</h1>
	</section>

	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Information goal details</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=goal_details&method=save" method="post">

					<div class="form-group">
						<label>match no</label>
						<input type="number" name="match_no" class="form-control" >
					</div>
					<div class="form-group">
						<label>player id</label>
						<input type="text" name="player_id" class="form-control" >
					</div>
					<div class="form-group">
						<label>team id</label>
						<input type="text" name="team_id" class="form-control" >
					</div>
					<div class="form-group">
						<label>goal time</label>
						<input type="text" name="goal_time" class="form-control" >
					</div>
					<div class="form-group">
						<label>goal type</label>
						<input type="text" name="goal_type" class="form-control" >
					</div>
					<div class="form-group">
						<label>play stage</label>
						<input type="text" name="play_stage" class="form-control" >
					</div>
					<div class="form-group">
						<label>goal schedule</label>
						<input type="text" name="goal_schedule" class="form-control" >
					</div>
					<div class="form-group">
						<label>goal half</label>
						<input type="text" name="goal_half" class="form-control" >
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>
