<?php

require 'models/MovieModel.php';

class MovieController
{
    private $movieModel;

    public function __construct()
    {
        $this->movieModel = new movieModel;
    }

    //Clase para direccionar/controlar las vistas
    public function index()
    {
        $movies = $this->movieModel->getAll();
        require 'views/layout.php';
        require 'views/movies/list.php';
    }

    //Clase para controlar guardado datos en la BD 
    public function new()
    {
        require 'views/layout.php';
        require 'views/movies/new.php';
    }

    public function save()
    {
        $this->movieModel->newMovie($_POST);
        header('Location: ?controller=movie');
    }

}