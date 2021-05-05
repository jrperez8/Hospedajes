<div class="container">
<form method="POST" action="<?php echo base_url() .'addTasks' ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tarea</label>
    <input type="text" class="form-control" name="task" aria-describedby="emailHelp">    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" name="description" class="form-label">Descripcion</label>
    <input type="text" class="form-control">  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" name="imageUrl" class="form-label">Url Imagen</label> 
    <input type="text" class="form-control">   
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
