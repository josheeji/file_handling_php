<?php

include_once('header.php');
?>
    

    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">
        <form action ="deletestore.php?id=<?php echo $_GET['id']  ;?>" method = "post">
      <h1>Are you sure you want to delete this record?</h1>
  <button type="submit" class="btn btn-primary">Yes delete it</button>
  <a class="btn btn-secondary" href= "index.php">Cancel</a>
</form>
   
  </main>

<?php
include_once('footer.php');
?>