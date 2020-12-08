<?php

require 'models/UserModel.php';
require 'models/RolModel.php';

/*
* Clase para  controlador de usaurio
*/
class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel;
    }

    public function index()
    {
        $users = $this->userModel->getAll();
        require 'views/layout.php';
        require 'views/users/list.php';
    }

    //Clase para crear datos 
    public function new()
    {
        $rol = new RolModel();
        $roles = $rol->getAll();
        require 'views/layout.php';
        require 'views/users/new.php';
    }

    public function save()
    {
        $this->userModel->newUser($_POST);
        header('Location: ?controller=user');
    }

    //Metodo para modificación de datos
    public function edit()
    {
        if(isset($_REQUEST['id']))
        {
            $id = $_REQUEST['id'];

            $user= $this->userModel->getById($id);
            $rol = new RolModel();
            $roles = $rol->getAll();

            require 'views/layout.php';
            require 'views/users/edit.php';
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
            $this->userModel->editUser($_POST);
            header('Location: ?controller=user');
        }
        else
        {
            echo "Error, operación no permitida.";
        }
    }

    //Metodo para eliminar datos
    public function delete()
    {
        $this->userModel->deleteUser($_REQUEST);
        header('Location: ?controller=user');        
    }

}


