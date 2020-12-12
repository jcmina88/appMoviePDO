<?php

require 'models/MovieModel.php';
require 'models/UserModel.php';
require 'models/CategoryModel.php';

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

        $user = new UserModel();
        $users = $user->getAll();

        $category = new CategoryModel();
        $categories = $category->getAll();
        
        require 'views/layout.php';
        require 'views/movies/new.php';
    }

    public function save()
    {
        //Organizar array para la tabla de movies
        $arrayMovie =
        [
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'user_id' => $_POST['user_id'],
            'status_id' => 1,
        ];

        //Array de las categorias
        $arrayCategories = $_POST['categories'];

        //Inserción de pelicula
        $respMovie = $this->movieModel->newMovie($arrayMovie);

        //Obtener último id registrado de pelicula
        $lastId = $thisModel->getLastId();

        //Inserción detalle category_movie
        $respCategoryMovie = $this->movieModel->saveCategoryMovie($arrayCategories, $lastId);
        
        //Validar si las inserciones fueron correctas
        $arrayResp =[];
        if($respMovie == true && $respCategoryMovie == true)
        {
            $arrayResp = 
            [
                'error' => true,
                'message' => 'Error creando la pelicula'
            ];
        }
        else
        {
            echo json_encode($arrayResp);
        }
        return;
    }

    //Metodo para modificación de datos
    public function edit()
    {
        if(isset($_REQUEST['id']))
        {
            $id = $_REQUEST['id'];

            $movie = $this->movieModel->getById($id);
            $user = new UserModel();
            $users = $user->getAll();

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

    //Metodo para eliminar datos
    public function delete()
    {
        $this->movieModel->deleteMovie($_REQUEST);
        header('Location: ?controller=movie');        
    }
    
}
