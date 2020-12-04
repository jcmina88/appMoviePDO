<?php

require 'models/RolModel.php';

class RolController
{
    private $RolModel;

    public function __construct()
    {
        $this->rolModel = new rolModel;
    }

    //Clase para direccionar/controlar las vistas
    public function index()
    {
        $roles = $this->rolModel->getAll();
        require 'views/layout.php';
        require 'views/roles/list.php';
    }

        //Clase para crear datos 
        public function new()
        {
            require 'views/layout.php';
            require 'views/roles/new.php';
        }
    
        public function save()
        {
            $this->rolModel->newRol($_POST);
            header('Location: ?controller=rol');
        }

}
