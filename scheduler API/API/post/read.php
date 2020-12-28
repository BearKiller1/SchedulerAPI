<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-type: application/json");
  
  include_once "../../conf/View.php";  
  include_once "../../conf/Model.php";

  $get = new Task("tasks");
  $result = $get->read();
  echo json_encode($result);




  // $task_obj->title = $_POST["title"];
  // $task_obj->desc = $_POST["desc"];
  // $task_obj->date = $_POST["date"];
  // $task_obj->done = $_POST["done"];
  // $task_obj->color = $_POST["color"];
  // $task_obj->priority = $_POST["priority"];
  // $task_obj->category_id = $_POST["category_id"];
  // $task_obj->subTaskQuant = $_POST["subTaskQuant"];
  // $task_obj->from_time = $_POST["from_time"];
  // $task_obj->to_time = $_POST["to_time"];
  // $task_obj->curr_user = $_POST["curr_user"];
  // $task_obj->create_date = $_POST["create_date"];  

  // $task_obj->title = "bla bla bla";
  // $task_obj->desc = "bla bla bla";
  // $task_obj->color = "bla bla bla";
  // $task_obj->category_id = "bla bla bla";
  // $task_obj->curr_user = "bla bla bla";
  
  // $task_obj->done = 3;
  // $task_obj->priority = 3;
  // $task_obj->subTaskQuant = 3;
  
  // $task_obj->date = 0;
  // $task_obj->from_time = 0;
  // $task_obj->to_time = 0;
  // $task_obj->create_date = 0;  
  
  // $task_obj->set();
  
  
  
  
  
  
  