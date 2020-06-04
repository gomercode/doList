<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="App/css/style.css">
    </head>
    <body>
        <div class="container">
         <form name="add" action="main/Add" method="POST" class="decor">
         <div class="form-left-decoration"></div>
         <div class="form-right-decoration"></div>
         <div class="circle"></div>
         <div class="form-inner">
         <h3>Новая задача</h3>
         <input type="text" name="task" placeholder="Имя новой задачи" required autofocus maxlength="30">
         <h3 class="label">Приоритетность от 1 до 10</h3>
         <input type="number"  name="priority"  min="1" max="10" value="1">
         <input  class="addButton" type="submit"  name="addButton" value="Задать">
            </div>
        </form>
        </div>
        
        
        
        
        
<!--        <div>TODO write contents</div>
        <form name="add" action="main/Add" method="POST">
            <input type="text" name="task" placeholder="New Task" required autofocus maxlength="30"/> 
             <input type="number"  name="priority"  min="1" max="10">
            <input type="submit" name="addButton" />
        </form>-->
        <ul class="older">
        <?php
             foreach ($data as $item ){
    
             ?> 
            <li>
              
                <div class="priority"><?php echo $item['priority']; ?></div>
                <form class="deleteForm" name ='deleteForm' action="main/Delete" method="POST">
                    <input class="delete" type="submit" name="deleteButton" value="X"/>
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>"/>
                </form>
                <p><?php echo $item['name']; ?></p>
                
            </li>
           
          <?php 
          
              }
        ?>
            

        </ul>
    </body>
</html>
