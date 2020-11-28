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

    //Metodo para guardar en DB
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

    //Metodo para editar BD
    public function getById($id)
    {
        try
        {
            /* : los dos puntos indican que va a consultar
            un parametro en array */
            $strSql = "SELECT * FROM users WHERE id=:id";
            $arrayData = ['id' => $id];
            return $this->pdo->select($strSql, $arrayData);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function editUser($data)
    {
        try
        {
            $strWhere = 'id = '. $data['id'];
            $table = 'users';
            $this->pdo->update($table, $data, $strWhere);

        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    //Metodo para borrado de información en DB
    public function deleteUser($data)
    {
        try
        {
            $strWhere = 'id = '. $data['id'];
            $table = 'users';
            $this->pdo->delete($table, $strWhere);

        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

}

