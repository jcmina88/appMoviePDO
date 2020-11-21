<?php

class MovieModel
{
    private $id;
    private $name;
    private $description;
    private $user_id;
    private $status_id;
    private $pdo;

    //Sumario CRUD

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
            $strSql = "SELECT * FROM movies";
            return $this->pdo->select($strSql);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    //Metodo para guardar en DB
    public function newMovie($data)
    {
        try
        {
            $data['status_id'] = 1;
            $this->pdo->insert("movies",$data);
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
            $strSql = "SELECT * FROM movies WHERE id=:id";
            $arrayData = ['id' => $id];
            return $this->pdo->select($strSql, $arrayData);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function editMovie($data)
    {
        try
        {
            $strWhere = 'id = '. $data['id'];
            $table = 'movies';
            $this->pdo->update($table, $data, $strWhere);

        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

}
