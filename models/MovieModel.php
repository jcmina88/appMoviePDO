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

}
