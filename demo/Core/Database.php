<?php

namespace Core;
use PDO;
//creating a php database

class Database{
    //creating a database connection db and query
    public $connection;
    protected $statement;
    //creating the db 
   
    public function __construct($config, $username='root', $password=""){
        $dsn = "mysql:". http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    // query the database
    public function query($query, $params=[]){
       $this->statement = $this->connection->prepare($query);
      $this->statement->execute($params);
        return $this;
    }
    public function find(){
        return $this->statement->fetch();
    }
    public function get(){
        return $this->statement->fetchAll();
    }
   
    public function findorfail(){
        $result = $this->find();
        if(!$result){
            abort();
        }
        return $result;
    }
}