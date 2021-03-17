<?php

require 'models/goal_detailsModel.php';

/**
 * Clase controlador 
 */
class goal_detailsController
{

	private $goal_detailsModel;

    public function __construct()
    {
   		$this->goal_detailsModel = new goal_detailsModel;
    }

    public function index()
    {
    	$goal_details = $this->goal_detailsModel->getAll();
    	require 'views/layout.php';
    	require 'views/goal_details/list.php';
    }
		public function new()
{
		require 'views/layout.php';
		require 'views/goal_details/new.php';
}

public function save()
{
		$this->goal_detailsModel->newgoal_details($_POST);
		header('Location: ?controller=goal_details');
}
public function edit()
{
		if(isset($_REQUEST['goal_id'])) {
				$id = $_REQUEST['goal_id'];

				$goal_details = $this->goal_detailsModel->getById($id);
				require 'views/layout.php';
				require 'views/goal_details/edit.php';
		} else {
				echo "El tipo de No Existe";
		}
}

public function update()
{
		if(isset($_POST)) {
				$this->goal_detailsModel->editgoal_details($_POST);
				header('Location: ?controller=goal_details');
		} else {
				echo "Error, acción no permitida.";
		}
}
public function delete()
{
		$this->goal_detailsModel->deletegoal_details($_REQUEST);
		header('Location: ?controller=goal_details');
}
}
