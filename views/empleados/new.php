<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>New Empleado</h1>
	</section>

	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Information Empleado</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=empleados&method=save" method="post">

					<div class="form-group">
						<label> Nombre de usuario</label>
						<input type="text" name="username" class="form-control" >
					</div>
					<div class="form-group">
						<label>Correo</label>
						<input type="text" name="email" class="form-control" >
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control" >
					</div>

					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>
