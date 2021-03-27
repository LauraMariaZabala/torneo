<?php

require 'models/empleadosModel.php';

/**
 * Clase controlador 
 */
class empleadosController
{

	private $empleadosModel;
	private $empleados;

    public function __construct()
    {
   		$this->empleadosModel = new empleadosModel;
    }

    public function index()
    {
    	$empleados = $this->empleadosModel->getAll();
    	require 'views/layout.php';
    	require 'views/empleados/list.php';
    }
		public function new()
{
		require 'views/layout.php';
		require 'views/empleados/new.php';
}

public function save()
{
		$this->empleadosModel->newEmpleado($_POST);
		header('Location: ?controller=empleados');
}
public function edit()
{
		if(isset($_REQUEST['id_Empleado'])) {
				$id = $_REQUEST['id_Empleado'];

				$empleados = $this->empleadosModel->getById($id);
				require 'views/layout.php';
				require 'views/empleados/edit.php';
		} else {
				echo "El tipo de No Existe";
		}
}

public function update()
{
		if(isset($_POST)) {
				$this->empleadosModel->editempleado($_POST);
				header('Location: ?controller=empleados');
		} else {
				echo "Error, acción no permitida.";
		}
}
public function delete()
{
		$this->empleadosModel->deleteempleado($_REQUEST);
		header('Location: ?controller=empleados');
}
}
