<?php

/*
 * Clase modelo para categoria  
*/

class CategoryModel
{
    private $id;
    private $name;
    private $pdo;
    
    /* 
    * Sumario CRUD
    */

    public function __construct()
    {
        try
        {
            $this->pdo = new Database;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    //Metodo para consultar en BD
    public function getAll()
    {
        try
        {
            $strSql = "SELECT * FROM users";
            return $this->pdo->select($strSql);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

}
