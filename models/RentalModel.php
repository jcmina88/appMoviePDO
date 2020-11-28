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

    //Metodo para consultar en BD
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

    //Metodo para guardar en DB
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

    //Metodo para editar BD
    public function getById($id)
    {
        try
        {
            /* : los dos puntos indican que va a consultar
            un parametro en array */
            $strSql = "SELECT * FROM rentals WHERE id=:id";
            $arrayData = ['id' => $id];
            return $this->pdo->select($strSql, $arrayData);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function editRental($data)
    {
        try
        {
            $strWhere = 'id = '. $data['id'];
            $table = 'rentals';
            $this->pdo->update($table, $data, $strWhere);

        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function deleteRental($data)
    {
        try
        {
            $strWhere = 'id = '. $data['id'];
            $table = 'rentals';
            $this->pdo->delete($table, $strWhere);

        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

}