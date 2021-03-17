<?php

/**
 * Clase Modelo goal_details

 */
class goal_detailsModel
{

	private $goal_id;
	private $name;
  private $pdo;

    public function __construct()
    {
    	try {
    		$this->pdo = new Database;
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    }
    }

    public function getAll()
    {
    	try {
    		$strSql = "SELECT * FROM goal_details";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }
		public function newgoal_details($data)
{
		try {
				$this->pdo->insert("goal_details",$data);
		} catch(PDOException $e) {
				die($e->getMessage());
		}
}
public function getById($id)
{
	 try {
				$strSql = "SELECT * FROM goal_details WHERE goal_id =:goal_id";
				$arrayData = ['goal_id' => $id];
				return $this->pdo->select($strSql, $arrayData);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
public function editgoal_details($data)
{
		try {
				$strWhere = 'goal_id ='. $data['goal_id'];
				$table = 'goal_details';
				$this->pdo->update($table, $data, $strWhere);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
public function deletegoal_details($data)
{
		try {
				$strWhere = 'goal_id = '. $data['goal_id'];
				$table = 'goal_details';
				$this->pdo->delete($table, $strWhere);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
}
