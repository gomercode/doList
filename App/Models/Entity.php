<?php
namespace App\Models;

class Entity 
{
    public $name = null;
    public $priority = null;
    public $id = null;
    
    public function getList() {
        $dsn = 'mysql:host = localhost; dbname=doList;charset=utf8;';
        $pdo = new \PDO($dsn,'vadim',"123");
//        $pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM list  ORDER BY priority DESC';
        $st = $pdo->prepare($sql);
        $st->execute();
        $rows = $st->fetchAll(\PDO::FETCH_ASSOC);
        $pdo = null;
        
        return $rows;
        
      
        
    }
    
      public function add($task) {
          
//          var_dump($task);
//          exit();
        $dsn = 'mysql:host = localhost; dbname=doList;charset=utf8;';
        $pdo = new \PDO($dsn,'vadim',"123");
//        $pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO  list (name, priority) VALUES (:name , :priority)';
        $st = $pdo->prepare($sql);
        $st->bindValue(":name", $task['task'] , \PDO::PARAM_STR);
        $st->bindValue(":priority", $task['priority'] , \PDO::PARAM_INT);
        $st->execute();
   
        $pdo = null;
        

    }
    
      public function delete($taskId) {
          
        $dsn = 'mysql:host = localhost; dbname=doList;charset=utf8;';
        $pdo = new \PDO($dsn,'vadim',"123");
        $sql = 'DELETE FROM list WHERE id = :id';
        $st = $pdo->prepare($sql);
        $st->bindValue(":id", $taskId , \PDO::PARAM_INT);
        $st->execute();
        $pdo = null;
        

    }
    
}