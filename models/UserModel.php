<?php

/*
 * Clase modelo usuario  
*/

class UserModel
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $status_id;
    private $role_id;
    private $pdo;
    
    /* 
    * Sumario
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
            $strSql = "SELECT * FROM users";
            return $this->pdo->select($strSql);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function newUser($data)
    {
        try
        {
            $data['status_id'] = 1;
            $data['password'] = md5($data['password']);
            $this->pdo->insert("users",$data);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }

    }
}

