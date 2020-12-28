CREATE TABLE tasks(
		id int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    task_title varchar(500) not null,
    task_desc varchar(5000) not null,
    sub_tasks_quant int(255),
    task_date date not null,
    category_id varchar(500) not null,
    create_date datetime not null,
    priority int(255) not null,
    color varchar(500) not null,
    from_time time,
    to_time time,
    done int(2) not null,
    curr_user varchar(500) not null
  );
  INSERT INTO tasks(task_title,task_desc,sub_tasks_quant,task_date,category_id,
          create_date,priority,color,from_time,to_time,done,curr_user) 
          VALUES('homework','page:17 sums,page: 17 and history project and poop eatting',
            '0','2020-12-9','2','2008-10-29 14:56:59','1','red','14:56','15:56','0','ucha');
            
  INSERT INTO tasks(task_title,task_desc,sub_tasks_quant,task_date,category_id,
          create_date,priority,color,from_time,to_time,done,curr_user) 
          VALUES('workout','12 pushups abs 10 min legs 50, 15km running',
            '3','2020-12-9','2','2008-10-29 14:56:59','1','red','14:56','15:56','1','ucha');

  INSERT INTO tasks(task_title,task_desc,sub_tasks_quant,task_date,category_id,
          create_date,priority,color,from_time,to_time,done,curr_user) 
          VALUES('homework','page:22 sums,page: 22 and english project and poop eatting',
            '0','2020-12-9','2','2008-10-29 14:56:59','1','red','14:56','15:56','0','ucha');
            
  INSERT INTO tasks(task_title,task_desc,sub_tasks_quant,task_date,category_id,
          create_date,priority,color,from_time,to_time,done,curr_user) 
          VALUES('homework','page:17 sums,page: 17 and history project and poop eatting',
            '0','2020-12-9','2','2008-10-29 14:56:59','1','red','14:56','15:56','0','ucha');
            
  INSERT INTO tasks(task_title,task_desc,sub_tasks_quant,task_date,category_id,
          create_date,priority,color,from_time,to_time,done,curr_user) 
          VALUES('homework','page:17 sums,page: 17 and history project and poop eatting',
            '0','2020-12-9','2','2008-10-29 14:56:59','1','red','14:56','15:56','0','ucha');
            
  INSERT INTO tasks(task_title,task_desc,sub_tasks_quant,task_date,category_id,
          create_date,priority,color,from_time,to_time,done,curr_user) 
          VALUES('workout','12 pushups abs 10 min legs 50, 15km running',
            '3','2020-12-9','2','2008-10-29 14:56:59','1','red','14:56','15:56','1','ucha');

  INSERT INTO tasks(task_title,task_desc,sub_tasks_quant,task_date,category_id,
          create_date,priority,color,from_time,to_time,done,curr_user) 
          VALUES('homework','page:22 sums,page: 22 and english project and poop eatting',
            '0','2020-12-9','2','2008-10-29 14:56:59','1','red','14:56','15:56','0','ucha');
            
  INSERT INTO tasks(task_title,task_desc,sub_tasks_quant,task_date,category_id,
          create_date,priority,color,from_time,to_time,done,curr_user) 
          VALUES('homework','page:17 sums,page: 17 and history project and poop eatting',
            '0','2020-12-9','2','2008-10-29 14:56:59','1','red','14:56','15:56','0','ucha');
            
          
CREATE TABLE categories(
		id int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name varchar(500) not null,
    category_desc varchar(5000) not null,    
    tasks_quant int(255),
    create_date datetime,
    color varchar(500) not null,
    curr_user varchar(500) not null
  );
          INSERT INTO categories(category_name,category_desc,tasks_quant,create_date,color,curr_user) VALUES('IT','programming & shit','0','2008-10-29 14:56:59','blue','ucha');
          INSERT INTO categories(category_name,category_desc,tasks_quant,create_date,color,curr_user) VALUES('home','doing at home','0','2008-10-29 14:56:59','aqua','ucha');
          INSERT INTO categories(category_name,category_desc,tasks_quant,create_date,color,curr_user) VALUES('health','health & shit','0','2008-10-29 14:56:59','green','ucha');
					
					
					-- SELECT c.category_name as category_name,
					--                              t.id_task,
					--                              t.task_title,
					--                              t.task_desc,
					--                              t.sub_tasks_quant,
					--                              t.task_date,
					--                              t.category_id,
					--                              t.create_date,
					--                              t.priority,
					--                              t.color,
					--                              t.from_time,
					--                              t.to_time,
					--                              t.done,
					--                              t.curr_user
					-- 
					--                       FROM tasks t
					--                       LEFT JOIN categories c ON t.category_id = c.id_category
					--                       ORDER BY  t.create_date DESC WHERE id_task = 2 LIMIT 0.1