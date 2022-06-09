<?php
include_once('header.php');
?>

    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">
        <form action ="storeteacher.php" method = "post">
    
  
     <div class="mb-3">
    <label for="name" class="form-label"> Name</label>
    <input name = "name" type="text" class="form-control"  id="name" aria-describedby="name">
     </div>
     <div class="mb-3">
    <label for="address" class="form-label"> Address</label>
    <input name = "address" type="text" class="form-control"  id="address" aria-describedby="address">
     </div>
     <div class="mb-3">
    <label for="email" class="form-label"> Email</label>
    <input name = "email" type="text" class="form-c ontrol"  id="email" aria-describedby="email">
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
     <div class="mb-3">
    <label for="post" class="form-label"> Post</label>
    <input name = "post" type="text" class="form-control"  id="post" aria-describedby="post">
     </div>
     <div class="mb-3">
    <label for="salary" class="form-label"> Salary</label>
    <input name = "salary" type="salary" class="form-control"  id="salary" aria-describedby="salary">
     </div>
     <div class="mb-3">
    <label for="contact" class="form-label"> Contact</label>
    <input name = "contact" type="number" class="form-control"  id="contact" aria-describedby="contact">
     </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
  </main>

<?php
include_once('footer.php');

?>