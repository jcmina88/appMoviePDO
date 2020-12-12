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
            $strSql="   SELECT
                            m.*,
                            u.name as user,
                            s.name as status
                        FROM movies m
                        INNER JOIN users u
                        ON u.id = m.user_id
                        INNER JOIN statuses s
                        ON s.id = m.status_id
                    ";
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
            $this->pdo->insert("movies",$data);
            return true;
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

    //Metodo para borrado de información en DB
    public function deleteMovie($data)
    {
        try
        {
            $strWhere = 'id = '. $data['id'];
            $table = 'movies';
            $this->pdo->delete($table, $strWhere);
    
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }
    
    public function getLastId()
    {
        try
        {
            $strSql = "SELECT MAX(id) as id FROM movies";
            $query = $this->pdo->select($strSql);
            return $query[0]->id;
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

    public function saveCategoryMovie($arrayCategories, $lastId)
    {
        try
        {
            foreach($arrayCategories as $category)
            {
                $data =
                [
                    'movie_id' => $lastId,
                    'category_id' => $category[id]
                ];
                $this->pdo->insert('category_movie', $data);
            }
            return true;
        }
        catch(PDOException $e)
        {
            die($e->getMessage()); 
        }
    }

}
