<?php
include_once('header.php');

?>
     
    </header>
    

    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">
        <form action ="storesubject.php" method = "POST">
          <?php
   $errors=$_GET["errors"];
?>
<div class="mb-3">
    <label for="s_id" class="form-label"> S_ID</label>
    <input name = "s_id" type="text" class="form-control <?php if(isset($errors['s_id'])){ echo 'is-invalid';}?>" id="s_id" aria-describedby="s_id">
      <?php
  if(isset($errors['s_id'])){
    echo "<span class = 'text-danger'>* ".$errors['s_id']."</span>";
  }

?>
        
  <div class="mb-3">
    <label for="s_name" class="form-label"> S_Name</label>
    <input name = "s_name" type="text" class="form-control <?php if(isset($errors['s_name'])){ echo 'is-invalid';}?>" id="s_name" aria-describedby="s_name">
      <?php
  if(isset($errors['s_name'])){
    echo "<span class = 'text-danger'>* ".$errors['s_name']."</span>";
  }

?>
  </div>
  
  <div class="mb-3">
    <label for="pr_fm" class="form-label">Practicle Full Marks</label>
    <input name="pr_fm" type="number" class="form-control <?php if(isset($errors['pr_fm'])){ echo 'is-invalid';}?>" id="pr_fm" aria-decsribedy="pr_fm">
    <?php
  if(isset($errors['pr_fm'])){
    echo "<span class = 'text-danger'>".$errors['pr_fm']."</span>";
  }

?>
  </div>
  <div class="mb-3">
    <label for="pr_pm" class="form-label">Practical Pass Marks</label>
    <input name= "pr_pm" type="number" class="form-control <?php if(isset($errors['pr_pm'])){ echo 'is-invalid';}?>" id="pr_pm" aria-describedby="pr_pm">
    <?php
  if(isset($errors['pr_pm'])){
    echo "<span class = 'text-danger'>".$errors['pr_pm']."</span>";
  }
  ?>
  </div>
  <div class="mb-3">
    <label for="th_fm" class="form-label">Theory Full Marks</label>
    <input name= "th_fm" type="number" class="form-control <?php if(isset($errors['th_fm'])){ echo 'is-invalid';}?>" id="th_fm" aria-describedby="th_fm">
    <?php
  if(isset($errors['th_fm'])){
    echo "<span class = 'text-danger'>".$errors['th_fm']."</span>";
  }
  ?>
  </div>
  <div class="mb-3">
    <label for="tr_pm" class="form-label">Theory Pass Marks</label>
    <input name= "tr_pm" type="number" class="form-control <?php if(isset($errors['tr_pm'])){ echo 'is-invalid';}?>" id="tr_pm" aria-describedby="tr_pm">
    <?php
    if(isset($errors['tr_pm'])){
      echo "<span class = 'text-danger'>".$errors['tr_pm']."</span>";
    }
    ?>
  </div>
  
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
  </main>

<?php

include_once('footer.php');

?>