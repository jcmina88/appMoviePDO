<?php

/*
* Controlador de bienvenida
*/
class WelcomeController
{
    /*Metodo inicio controlador*/
    public function index()
    {
        require 'views/welcome.php';
    }

    public function home()
    {
        require 'views/layout.php';
        require 'views/home.php';
    }

}