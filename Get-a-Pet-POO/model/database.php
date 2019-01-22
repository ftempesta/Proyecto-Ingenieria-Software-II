<?php
class Database{
    public function StartUp(){
        $pdo = new PDO('pgsql:host=localhost; port=5432; dbname=get_a_pet', "postgres", "getapet");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        return $pdo;
    }
}
?>