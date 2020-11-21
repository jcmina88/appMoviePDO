<?php

class Database extends PDO
{
    private $driver     = 'mysql';
    private $host       = 'localhost';
    private $dbName     = 'moviepdo';
    private $charset    = 'utf8';
    private $user       = 'root';
    private $password   = '';

    //Metodo para conectar a la base de datos
    public function __construct()
    {
        try
        {
            parent::__construct("{$this->driver}:host={$this->host}; dbname={$this->dbName}; charset={$this->charset}", $this
            ->user, $this->password);

            /*Trae todos los registros de error de PHP*/
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Conexión fallida {$e->getMessage()}";
        }
    }

    //Metopdo para realizar consultas en la base de datos
    public function select ($strSql, $arrayData = array(), $fetchMode = PDO::FETCH_OBJ)
    {
        $query = $this->prepare($strSql);

        foreach ($arrayData as $key => $value)
            $query->bindParam(":$key", $value);
        
        if(!$query->execute())
            echo "Error la consulta no se realizó";
        else
            return $query->fetchAll($fetchMode);
    }

    //Metodo para hacer las inserciones en la BD (agregar datos)
    public function insert($table, $data)
    {
        try
        {
            //Ordenar array por key
            ksort($data);
            //Asignar nombre de los campor de la tabla
            $fieldNames = implode('`, `', array_keys($data));
            //Obtener valores
            $fieldValues = ':'. implode(', :', array_keys($data));
            //String de la setencia (consulta)
            $strSql = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES($fieldValues)");
            //Asignación de parametros a la sentencia (consulta)
            foreach($data as $key => $value)
            {
                $strSql->bindValue(":$key", $value);
            }
            //Ejecuta la sentencia SQL
            $strSql->execute();
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function update($table, $data, $where)
    {
        try
        {
            //Ordenar array por key
            ksort($data);
            
            $fieldDetails = '';
            foreach($data as $key => $value)
            {
                //( .= ) contatena y lo guarda en el mismo valor
                // ( : ) Especifica el valor
                $fieldDetails .="`$key` = :$key,"; 
            }

            //rtrim quita el elemento un espacio a la derecha
            $fieldDetails = rtrim($fieldDetails, ',');

            $query = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");

            foreach($data as $key => $value)
            {
                $query->bindValue(":$key", $value);
            }

            $query->execute();

        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }  


}