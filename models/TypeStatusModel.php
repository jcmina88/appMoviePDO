<?php

class TypeStatusModel
{
    private $id;
    private $name;
    private $type_status_id;
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
            $strSql = "SELECT * FROM type_statuses";
            return $this->pdo->select($strSql);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function newTypeStatus($data)
    {
        try
        {
            $this->pdo->insert("type_statuses_id",$data);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

}
