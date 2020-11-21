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

}