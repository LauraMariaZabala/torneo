<?php


/**
* Clase Controlador de Bienvenida
**/
class WelcomeController
{
    /**
     * Metodo de Inicio del controlador
     */
    public function index()
    {
        require 'views/welcome.php';
    }

    public function login()
    {
    	require 'views/login.php';  
    }
    public function Registro(){
        require 'views/Registro.php';

    }
    public function ingreso(){
        require 'views/layout.php';
        require 'views/empleados/list.php';

    }
}
