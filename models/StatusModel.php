<?php

class StatusModel
{
    private $id;
    private $name;
    private $type_status;
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
            $strSql = "SELECT * FROM statuses";
            return $this->pdo->select($strSql);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function newStatus($data)
    {
        try
        {
            $data['type_status_id'] = 1;
            $this->pdo->insert("statuses",$data);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

}
