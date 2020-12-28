<?php
  class Database {
    private $DBhost = "localhost";
    private $DBuser = "root";
    private $DBpwd = "";
    private $DBname = "schedulerapi";
    
    private $connection;
    
    protected function connect(){
      $this->connection = null;
      try {
        $this->connection = new PDO("mysql:host=".$this->DBhost.";dbname=".
                      $this->DBname,$this->DBuser,$this->DBpwd);
                      
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        
      } catch (PDOException $e) {
        echo "<br> Connection error in Database.php" . $e->getMessage();
      }
    
      return $this->connection;
    }
  }
