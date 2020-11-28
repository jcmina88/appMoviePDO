<?php

require 'models/RentalModel.php';

class RentalController
{
    private $RentalModel;

    public function __construct()
    {
        $this->rentalModel = new rentalModel;
    }

    //Clase para direccionar/controlar las vistas
    public function index()
    {
        $rentals = $this->rentalModel->getAll();
        require 'views/layout.php';
        require 'views/rentals/list.php';
    }

    //Clase para controlar guardado datos en la BD 
    public function new()
    {
        require 'views/layout.php';
        require 'views/rentals/new.php';
    }

    public function save()
    {
        $this->rentalModel->newRental($_POST);
        header('Location: ?controller=rental');
    }

    //Metodo para modificación de datos
    public function edit()
    {
        if(isset($_REQUEST['id']))
        {
            $id = $_REQUEST['id'];

            $rental= $this->rentalModel->getById($id);

            require 'views/layout.php';
            require 'views/rentals/edit.php';
        }
        else
        {
            echo "El dato no existe.";
        }
    }

    //Metodo para guardar la actualización de datos
    public function update()
    {
        if(isset($_POST))
        {
            $id = $_REQUEST['id'];
            $this->rentalModel->editRental($_POST);
            header('Location: ?controller=rental');
        }
        else
        {
            echo "Error, operación no permitida.";
        }
    }

    public function delete()
    {
        $this->rentalModel->deleteRental($_REQUEST);
        header('Location: ?controller=rental');
    }

}