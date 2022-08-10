<?php
declare(strict_types=1);

require CONFIG_PATH.'Database.php';

class Connet extends Database{

    public static function db(){

        $db = new Database;
        
      return  $db->connect();

    }
}