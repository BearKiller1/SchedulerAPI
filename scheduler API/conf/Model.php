<?php
  include_once "Database.php";
  class Model extends Database{
    private $query;
    private $conn;
    
    public function __construct($query){
      $this->conn = $this->connect();
      $this->query = $query;
    }
    
    public function get(){     
      $stmt = $this->conn->prepare($this->query);
      $stmt->execute();
      $arr = $stmt->fetchAll();
      return $arr;
    }
    
    public function getEach($id){  
      $query = $this->query . " WHERE id = ?";
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(1, $id);
      $stmt->execute();
      $arr = $stmt->fetchAll();
      return $arr;
    }
    
    public function set($params){
      $stmt = $this->conn->prepare($this->query);
      // foreach ($params as $key => $value) {
      //   echo $key . "=>" .$value;
      //     $stmt->bindValue(":".$key,$value);
      // }
      // 
      echo $this->query;
      echo json_encode($params) . "<br><br>";
      $params["title"];
      // for ($i=0; $i < count($params); $i++) {
      //   echo $i."->".$params[$i];
      //   $stmt->bindParam($i,$params[$i]);
      // }
      // $stmt->execute();
    }
    
  
  }