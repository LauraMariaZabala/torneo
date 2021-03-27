<?php

/**
 * Clase Modelo empleado

 */
class empleadosModel
{

	private $id_Empleado;
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
    		$strSql = "SELECT * FROM empleado";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }
		public function newEmpleado($data)
{
		try {
				$this->pdo->insert("empleado",$data);
		} catch(PDOException $e) {
				die($e->getMessage());
		}
}
public function getById($id)
{
	 try {
				$strSql = "SELECT * FROM empleado WHERE id_Empleado =:id_Empleado";
				$arrayData = ['id_Empleado' => $id];
				return $this->pdo->select($strSql, $arrayData);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
public function editempleado($data)
{
		try {
				$strWhere = 'id_Empleado ='. $data['id_Empleado'];
				$table = 'empleado';
				$this->pdo->update($table, $data, $strWhere);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
public function deleteempleado($data)
{
		try {
				$strWhere = 'id_Empleado = '. $data['id_Empleado'];
				$table = 'empleado';
				$this->pdo->delete($table, $strWhere);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
}
