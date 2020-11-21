<?php

/*
 * Clase modelo Rol  
*/

class RolModel
{
    private $id;
    private $name;
    private $status_id;
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

    public function getAll()
    {
        try
        {
            $strSql = "SELECT * FROM roles";
            return $this->pdo->select($strSql);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function newRol($data)
    {
        try
        {
            $data['status_id'] = 1;
            $this->pdo->insert("roles",$data);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }

    }
}
