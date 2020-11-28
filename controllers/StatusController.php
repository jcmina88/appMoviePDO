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
        $this->statusModel->newStatus($_POST);
        header('Location: ?controller=status');
    }

    //Metodo para modificación de datos
    public function edit()
    {
        if(isset($_REQUEST['id']))
        {
            $id = $_REQUEST['id'];

            $statusdb = $this->statusModel->getById($id);

            require 'views/layout.php';
            require 'views/status/edit.php';
        }
        else
        {
            echo "El usuario no existe.";
        }
    }

    public function update()
    {
        if(isset($_POST))
        {
            $id = $_REQUEST['id'];
            $this->statusModel->editStatus($_POST);
            header('Location: ?controller=status');
        }
        else
        {
            echo "Error, la operación no está permitida.";
        }
    }

    public function delete()
    {
        $this->statusModel->deleteStatus($_REQUEST);
        header('Location: ?controller=status');        
    }
}
