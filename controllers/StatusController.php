<?php

require 'models/StatusModel.php';

class StatusController
{
    private $statusModel;

    public function __construct()
    {
        $this->statusModel = new statusModel;
    }

    //Clase para direccionar/controlar las vistas
    public function index()
    {
        $statusdb = $this->statusModel->getAll();
        require 'views/layout.php';
        require 'views/status/list.php';
    }

    //Clase para controlar guardado datos en la BD 
    public function new()
    {
        require 'views/layout.php';
        require 'views/status/new.php';
    }

    public function save()
    {
        $this->statusModel->statusMovie($_POST);
        header('Location: ?controller=status');
    }

}
