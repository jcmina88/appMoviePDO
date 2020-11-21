<?php

require 'models/TypeStatusModel.php';

class TypeStatusController
{
    private $typeStatusModel;

    public function __construct()
    {
        $this->typeStatusModel = new typeStatusModel;
    }

    //Clase para direccionar/controlar las vistas
    public function index()
    {
        $typestatus = $this->typeStatusModel->getAll();
        require 'views/layout.php';
        require 'views/type_status/list.php';
    }

    //Clase para controlar guardado datos en la BD 
    public function new()
    {
        require 'views/layout.php';
        require 'views/type_status/new.php';
    }

    public function save()
    {
        $this->typeStatusModel->newTypeStatus($_POST);
        header('Location: ?controller=typestatus');
    }

}
