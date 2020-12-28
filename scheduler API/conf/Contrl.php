<?php
  abstract class Contrl {
    public $query;
    public $object;
    public $params;
    
    public function __construct($params){
      $this->params = $params;
      $this->query = "INSERT INTO ". $this->table . $this->sql;
      // echo json_encode($params);
      $this->object = new Model($this->query);
      return $this->object->set($this->params);
    }
  
  }
  class SetTask extends Contrl{
    // public $title;
    // public $desc;
    // public $date;
    // public $done;
    // public $color;
    // public $priority;
    // public $category_id;
    // public $subTaskQuant;
    // public $from_time;
    // public $to_time;
    // public $curr_user;
    // public $create_date;
    public $table = "tasks";
    public $sql = "(task_title,task_desc,task_date,done,color,to_time,
                    from_time,curr_user,priority,create_date,category_id,
                    subTaskQuant)  VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";
  }
  
  class SetProject extends Contrl{
    public $title;
    public $desc;
    public $done;
    public $color;
    public $progress;
    public $categoryQuant;
    public $start_time;
    public $finish_time;
    public $curr_user;
    public $create_date;
    public $table = "projects";
    public $sql = "(project_name,project_desc,categories_quant,color,done,
                 progress,start_date,finish_date,curr_user,create_date)
                 VALUES(?,?,?,?,?,?,?,?,?,?);";
  }
  
  class SetCategory extends Contrl{
    public $title;
    public $desc;
    public $color;
    public $taskQuant;
    public $curr_user;
    public $create_date;
    public $table = "categories";
    public $sql = "(category_name,category_desc,
                          color,curr_user,tasks_quant,
                          create_date) VALUES(?,?,?,?,?,?);";

  }
  
  // class SetTask{
  //   public $title;
  //   public $desc;
  //   public $date;
  //   public $done;
  //   public $color;
  //   public $priority;
  //   public $category_id;
  //   public $subTaskQuant;
  //   public $from_time;
  //   public $to_time;
  //   public $curr_user;
  //   public $create_date;
  // 
  //   public function set(){
  //     $query = "INSERT INTO ".$this->table."
  //               (task_title,task_desc,sub_tasks_quant,task_date,category_id,
  //               create_date,priority,color,from_time,to_time,done,curr_user)
  //               VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";
  //     $stmt = $this->conn->prepare($query);
  // 
  //     $stmt->bindParam(1,$this->title);
  //     $stmt->bindParam(2,$this->desc);
  //     $stmt->bindParam(3,$this->color);
  //     $stmt->bindParam(4,$this->curr_user);
  //     $stmt->bindParam(5,$this->category_id);
  // 
  //     $stmt->bindParam(6,$this->from_time);
  //     $stmt->bindParam(7,$this->to_time);
  //     $stmt->bindParam(8,$this->date);
  //     $stmt->bindParam(9,$this->create_date);
  // 
  //     $stmt->bindParam(10,$this->done);
  //     $stmt->bindParam(11,$this->priority);
  //     $stmt->bindParam(12,$this->subTaskQuant);
  // 
  //     return $stmt->execute() ? true : false;
  //   }
  // }
  // 
  // class SetProject{
  //   public $title;
  //   public $desc;
  //   public $done;
  //   public $color;
  //   public $progress;
  //   public $categoryQuant;
  //   public $start_time;
  //   public $finish_time;
  //   public $curr_user;
  //   public $create_date;
  // 
  //   public function set(){
  //     $query = "INSERT INTO ".$this->table."
  //               (project_name,project_desc,categories_quant,color,done,
  //               progress,start_date,finish_date,curr_user,create_date)
  //               VALUES(?,?,?,?,?,?,?,?,?,?);";
  //     $stmt = $this->conn->prepare($query);
  // 
  //     $stmt->bindParam(1,$this->title);
  //     $stmt->bindParam(2,$this->desc);
  //     $stmt->bindParam(3,$this->categoryQuant);
  //     $stmt->bindParam(4,$this->color);
  //     $stmt->bindParam(5,$this->done);
  // 
  //     $stmt->bindParam(6,$this->progress);
  //     $stmt->bindParam(7,$this->start_time);
  //     $stmt->bindParam(8,$this->finish_time);
  //     $stmt->bindParam(9,$this->curr_user);
  //     $stmt->bindParam(10,$this->create_date);
  // 
  // 
  //     return $stmt->execute() ? true : false;
  //   }
  // }
  // 
  // class SetCategory{
  //   public $title;
  //   public $desc;
  //   public $color;
  //   public $taskQuant;
  //   public $curr_user;
  //   public $create_date;
  // 
  //   public function set(){
  // 
  //     $query = "INSERT INTO ".$this->table."
  //               (category_name,category_desc,color,curr_user,tasks_quant,create_date)
  //               VALUES(?,?,?,?,?,?);";
  //     $stmt = $this->conn->prepare($query);
  // 
  //     $stmt->bindParam(1,$this->title);
  //     $stmt->bindParam(2,$this->desc);
  //     $stmt->bindParam(3,$this->color);
  //     $stmt->bindParam(4,$this->curr_user);
  //     $stmt->bindParam(5,$this->taskQuant);
  //     $stmt->bindParam(6,$this->create_date);
  // 
  //     return $stmt->execute() ? true : false;
  //   }
  // }
  // 
