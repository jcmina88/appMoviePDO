<?php

require 'models/UserModel.php';

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
        require 'views/layout.php';
        require 'views/users/new.php';
    }

    public function save()
    {
        $this->userModel->newUser($_POST);
        header('Location: ?controller=user');
    }

}

