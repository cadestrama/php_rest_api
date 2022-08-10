<?php
declare(strict_types=1);

class Database{

    private $host='localhost';
    private $dbname='restapi';
    private $username='root';
    private $password='';
    private $conn;

    protected function connect(){
        $this->conn= null;

        try{
        
         $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password); 
         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        }catch(PDOException $e){
            echo 'Connect Error: '. $e->getMessage();
        }

        return $this->conn;
    }
}