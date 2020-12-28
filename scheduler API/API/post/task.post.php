<?php
  header("Access-Control-Allow-Origin: *");
  // header("Content-type: application/json");
  
  include_once "../../conf/Contrl.php";  
  include_once "../../conf/Model.php";

  $parameters = [
    "title" => $_POST["title"],
    "desc" => $_POST["desc"],
    "date" => $_POST["date"],
    "done" => $_POST["done"],
    "color" => $_POST["color"],
    "to_time" => $_POST["to_time"],
    "from_time" => $_POST["from_time"],
    "curr_user" => $_POST["curr_user"],
    "priority" => $_POST["priority"],
    "create_date" => $_POST["create_date"],
    "category_id" => $_POST["category_id"],
    "subTaskQuant" => $_POST["subTaskQuant"]
  ];
  foreach ($parameters as $value) {
    echo "<br>" . $value;
  }
  if($postObj = new SetTask($parameters)){
  echo "12";}
  else{echo "13";}