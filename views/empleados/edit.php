<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Edit user</h1>
	</section>
	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Info user</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=empleados&method=update" method="post">

					<input type="hidden" name="id_Empleado" value="<?php echo $empleados[0]->id_Empleado; ?>">
          <div class="form-group">
            <label>Nombre de usuario</label>
            <input type="text" name="username" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $empleados[0]->username; ?>">
          </div>
		  <div class="form-group">
            <label>Correo</label>
            <input type="text" name="email" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $empleados[0]->email; ?>">
          </div>
		  <div class="form-group">
            <label>password</label>
            <input type="text" name="password" class="form-control" placeholder="Ingrese nombre del estado" value="<?php echo $empleados[0]->password; ?>">
					<div class="form-group">
						<button class="btn btn-primary">Editar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>
