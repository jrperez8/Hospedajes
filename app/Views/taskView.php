
<?php
    foreach ($tasks as $task){        
        echo "<div class='alert alert-warning' role='alert'>
        Nombre: {$task->name} - Pais: {$task->country} - Ciudad {$task->city}</div>";    
    }
?>