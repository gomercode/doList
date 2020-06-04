<?php

namespace App\Controllers;

use App\System\View;
use App\Models\Task;
/**
 * Главный контроллер приложения
 * 
 * @author Vadim S.
 */

class mainController {
    
    public function actionAdd() {
       
        // Создаем модель  и Добавляем данные
        $newTask = new Task();
        $newTask->add($_POST);
      
        // Отправляемя назад
      header( "Location: /../");
      
    }
    
      public function actionDelete() {
          
        $newTask = new Task();
        $newTask->delete($_POST['id']);
      
        // Отправляемя назад
      header( "Location: /../");
      
    }
    
}