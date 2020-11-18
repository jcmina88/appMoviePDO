<?php
    /* Llamado a la clase conexión */
    require 'providers/Database.php';

    /* Inicializar variable de almacenamiento del controlador base */
    $controller = 'WelcomeController';

    /* Determinar acciones a tomar */
    if(!isset($_REQUEST['controller']))
    {
        /* Clase controlador a usar */
        require 'controllers/'.$controller.'.php';

        /* ucwords cambia caracteres may min*/
        $controller = ucwords($controller);
        $controller = new $controller;
        $controller -> index();
    }
    else
    {
        /* Cuandop existe una solicitud desde el navegador */
        $controller = ucwords($_REQUEST['controller']. 'Controller');
        /* Condicional ternario si es verdad o es falso*/
        $method     = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

        require 'controllers/'.$controller.'.php';
        $controller = new $controller;

        /* Realizar el llamado o la ejecución del metodo en el controlador */
        call_user_func(array($controller, $method));

    }











