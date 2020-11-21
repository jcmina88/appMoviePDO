<?php

class RentalModel
{
    private $id;
    private $start_date;
    private $end_date;
    private $total;
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
            $strSql = "SELECT * FROM rentals";
            return $this->pdo->select($strSql);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function newRental($data)
    {
        try
        {
            $data['status_id'] = 1;
            $this->pdo->insert("rentals",$data);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

}