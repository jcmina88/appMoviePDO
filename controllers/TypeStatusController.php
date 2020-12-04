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

    //Metodo para modificación de datos
    public function edit()
    {
        if(isset($_REQUEST['id']))
        {
            $id = $_REQUEST['id'];	

            $tstatus = $this->typeStatusModel->getById($id);

            require 'views/layout.php';
            require 'views/type_status/edit.php';
        }
        else
        {
            echo "El tipo de estado no existe.";
        }
    }

    public function update()
    {
        if(isset($_POST))
        {
            $id = $_REQUEST['id'];
            $this->typeStatusModel->editTypeStatus($_POST);
            header('Location: ?controller=typestatus');
        }
        else
        {
            echo "Error, operación no permitida.";
        }
    }

    //Metodo para eliminar datos
    public function delete()
    {
        $this->typeStatusModel->deleteTypeStatus($_REQUEST);
        header('Location: ?controller=typestatus'); 
    }

}
