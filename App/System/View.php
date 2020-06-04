<?php


namespace App\System;

/**
 * Главный класс отвечающий  за отображения  представлений
 *
 * 
 * @author Vadim S.
 */


/**
 * Description of View
 *
 * @author Vadim.S
 *  * @param string $path
    * @param array $data
    * @throws \ErrorException
 */
class View {
    public static function render(string $path, array $data = [])
    {
        
      
        
        $fullpath = __DIR__ . '/../Views/' . $path . '.php';
         
        if(!file_exists($fullpath)){
            throw new \ErrorException('view not found');
        }
        if(!empty($data)){
            foreach ($data as $key => $value){

                $$key = $value;
                
               
            }
        }
        
       
        
        include($fullpath);
    }
}
