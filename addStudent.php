<?php
include_once('header.php');

?>
     
    </header>
    

    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">
        <form action ="store.php" method = "POST">
          <?php
   $errors=$_GET["errors"];
?>
        
  <div class="mb-3">
    <label for="name" class="form-label"> Name</label>
    <input name = "name" type="text" class="form-control <?php if(isset($errors['name'])){ echo 'is-invalid';}?>" id="name" aria-describedby="name">
      <?php
  if(isset($errors['name'])){
    echo "<span class = 'text-danger'>* ".$errors['name']."</span>";
  }

?>
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input name="address" type="text" class="form-control <?php if(isset($errors['address'])){ echo 'is-invalid';}?>" id="address" aria-decsribedy=""address>
    <?php
  if(isset($errors['address'])){
    echo "<span class = 'text-danger'>".$errors['address']."</span>";
  }

?>
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input name= "id" type="number" class="form-control <?php if(isset($errors['id'])){ echo 'is-invalid';}?>" id="id" aria-describedby="id">
    <?php
  if(isset($errors['id'])){
    echo "<span class = 'text-danger'>".$errors['id']."</span>";
  }
  ?>
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">Class</label>
    <input name= "class" type="text" class="form-control <?php if(isset($errors['class'])){ echo 'is-invalid';}?>" id="class" aria-describedby="class">
    <?php
    if(isset($errors['class'])){
      echo "<span class = 'text-danger'>".$errors['class']."</span>";
    }
    ?>
  </div>
  
  
  Gender:
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value ="male" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
  Female
  </label>
</div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
  </main>

<?php

include_once('footer.php');

?>