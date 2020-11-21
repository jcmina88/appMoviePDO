<?php

require 'models/MovieModel.php';

class MovieController
{
    private $movieModel;

    public function __construct()
    {
        $this->movieModel = new movieModel;
    }

    //Metodo para direccionar/controlar las vistas
    public function index()
    {
        $movies = $this->movieModel->getAll();
        require 'views/layout.php';
        require 'views/movies/list.php';
    }

    //Metodo para controlar guardado datos en la BD 
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

    //Metodo para modificación de datos
    public function edit()
    {
        if(isset($_REQUEST['id']))
        {
            $id = $_REQUEST['id'];

            $movie = $this->movieModel->getById($id);

            require 'views/layout.php';
            require 'views/movies/edit.php';
        }
        else
        {
            echo "Pelicula no encontrada.";
        }
    }

    public function update()
    {
        if(isset($_POST))
        {
            $id = $_REQUEST['id'];
            $this->movieModel->editMovie($_POST);
            header('Location: ?controller=movie');
        }
        else
        {
            echo "Error, operación no permitida.";
        }
    }

}
