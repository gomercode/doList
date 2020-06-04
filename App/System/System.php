<?php

namespace App\System;
class System 
{
     /**
     * Запуск приложения, разбите url запроса с последующим 
     * получением контроллера и экшона.
     * 
     * @author Vadim S.
     * @throws \ErrorException
     */
    public static function start() {
       $path = $_SERVER['REQUEST_URI'];
       $pathParts = explode('/', $path);
       $controller = $pathParts[1];
       $action = $pathParts[2];
       $controller = 'App\\Controllers\\' . $controller . 'Controller';
       $action = 'action' . ucfirst($action);
       
     

          // Если класса не существует, выбрасывем исключение
        if (!class_exists($controller)) {
            throw new \ErrorException('Controller does not exist');
        }
        
        // Создаем экземпляр класса контроллера
        $objController = new $controller;
        
       
        
        
        // Если действия у контроллера не существует, выбрасываем исключение
        if (!method_exists($objController, $action)) {
            throw new \ErrorException('action does not exist');
        }
       
      
       $objController->$action();
       
      

    }
    
}