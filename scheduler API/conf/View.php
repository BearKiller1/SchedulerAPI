<?php
  abstract class View {
    public $object;
    public $query;

    public function __construct($table){
      $this->query = "SELECT * from ". $table;
      $this->object = new Model($this->query);
    }

    public function read(){
      return (isset($_GET["id"])) ?
      $this->object->getEach($_GET["id"]) :
      $this->object->get();
    }
  }

  class Task extends View{}
  class Project extends View{}
  class Category extends View{}
