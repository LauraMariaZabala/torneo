<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Edit goal details </h1>
	</section>
	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Tipo de estados</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=goal_details&method=update" method="post">

					<input type="hidden" name="goal_id" value="<?php echo $goal_details[0]->goal_id; ?>">
          <div class="form-group">
            <label>match no</label>
            <input type="text" name="match_no" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $goal_details[0]->match_no; ?>">
          </div>
		  <div class="form-group">
            <label>player id</label>
            <input type="text" name="player_id" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $goal_details[0]->player_id; ?>">
          </div>
		  <div class="form-group">
            <label>team id</label>
            <input type="text" name="team_id" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $goal_details[0]->team_id; ?>">
          </div>
		  <div class="form-group">
            <label>goal time</label>
            <input type="text" name="goal_time" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $goal_details[0]->goal_time; ?>">
          </div>
		  <div class="form-group">
            <label>goal type</label>
            <input type="text" name="goal_type" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $goal_details[0]->goal_type; ?>">
          </div>
		  <div class="form-group">
            <label>play stage</label>
            <input type="text" name="play_stage" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $goal_details[0]->play_stage; ?>">
          </div>
		  <div class="form-group">
            <label>goal schedule</label>
            <input type="text" name="goal_schedule" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $goal_details[0]->goal_schedule; ?>">
          </div>
		  <div class="form-group">
            <label>goal half</label>
            <input type="text" name="goal_half" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $goal_details[0]->goal_half; ?>">
          </div>
					<div class="form-group">
						<button class="btn btn-primary">Editar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>
