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

    //Metodo para consultar en BD
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

    //Metodo para guardar en DB
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

    //Metodo para editar BD
    public function getById($id)
    {
        try
        {
            /* : los dos puntos indican que va a consultar
            un parametro en array */
            $strSql = "SELECT * FROM statuses WHERE id=:id";
            $arrayData = ['id' => $id];
            return $this->pdo->select($strSql, $arrayData);
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function editStatus($data)
    {
        try
        {
            $strWhere = 'id = '. $data['id'];
            $table = 'statuses';
            $this->pdo->update($table, $data, $strWhere);

        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    //Metodo para borrado de información en DB
    public function deleteStatus($data)
    {
        try
        {
            $strWhere = 'id = '. $data['id'];
            $table = 'statuses';
            $this->pdo->delete($table, $strWhere);

        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }
    
}
