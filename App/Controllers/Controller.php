<?php

namespace App\Controllers;

use App\System\View;
use App\Models\Task;
/**
 * Главный контроллер приложения
 * 
 * @author Vadim S.
 */

class Controller {
    
    public function action() {
       
        
        // Создаем модель
        $model = new Task();
        
       
        // Получаем данные используя модель
        $data = $model->getList();
        
       
        
         
        View::render('index',['data' => $data,]);
     
        
      
    }
    
}