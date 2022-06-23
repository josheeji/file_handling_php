<?php
include_once('header.php');
?>

    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">
        <form action ="editstore.php?id=<?php echo $_GET['id']  ;?>" method = "post">
          <?php
   $errors=$_GET["errors"];
//  print_r($_GET);
$filename = "teacher.txt";
$file = fopen("teacher.txt", "r");
fgets($file);
$teacher = [];
while(!feof($file)) {

 $tempteacher= explode(",",fgets($file));
 if($tempteacher[0]==$_GET['id']){
     $teacher= $tempteacher;
 }
}

?>
 <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input name="id" value= "<?php echo $teacher[0] ;?>" type="number" class="form-control <?php if(isset($errors['id'])){ echo 'is-invalid';}?>" id="id" aria-decsribedy="id">
    <?php
  if(isset($errors['id'])){
    echo "<span class = 'text-danger'>".$errors['id']."</span>";
  }

?>
  </div>

        
  <div class="mb-3">
    <label for="name" class="form-label"> Name</label>
    <!-- edit garda kheri value access garna ko lagi value = use hunxa -->
    <input name = "name" value = "<?php echo $teacher[1]; ?>" type="text" class="form-control <?php if(isset($errors['name'])){ echo 'is-invalid';}?>" id="name" aria-describedby="name">
      <?php
  if(isset($errors['name'])){
    echo "<span class = 'text-danger'>* ".$errors['name']."</span>";
  }

?>
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input name="address" value= "<?php echo $teacher[2] ;?>" type="text" class="form-control <?php if(isset($errors['address'])){ echo 'is-invalid';}?>" id="address" aria-decsribedy=""address>
    <?php
  if(isset($errors['address'])){
    echo "<span class = 'text-danger'>".$errors['address']."</span>";
  }

?>
  </div>
  <div class="mb-3">
    <label for="post" class="form-label">Post</label>
    <input name= "post" value="<?php echo $teacher[3] ;?>" type="text" class="form-control <?php if(isset($errors['post'])){ echo 'is-invalid';}?>" id="post" aria-describedby="post">
    <?php
  if(isset($errors['post'])){
    echo "<span class = 'text-danger'>".$errors['post']."</span>";
  }
  ?>
    
  Gender:
  <div class="form-check">

  <input class="form-check-input" type="radio" value="male"<?php if ($student[4]=="male "){
    echo "checked";
}
 ?>  name="gender"  id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" value= "female" type="radio" name="gender" <?php
if ($teacher[4]=="female"){
echo "checked";
}
 ?> id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
  Female
  </label>
</div>
</div>
  <div class="mb-3">
    <label for="gmail" class="form-label">Gmail</label>
    <input name= "gmail" type="text" value ="<?php echo $teacher[5];?>" class="form-control <?php if(isset($errors['gmail'])){ echo 'is-invalid';}?>" id="gmail" aria-describedby="gmail">
    <?php
    if(isset($errors['gmail'])){
      echo "<span class = 'text-danger'>".$errors['gmail']."</span>";
    }
    ?>
  </div>
  </div>
  <div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input name= "contact" type="number" value ="<?php echo $teacher[6];?>" class="form-control <?php if(isset($errors['class'])){ echo 'is-invalid';}?>" id="contact" aria-describedby="contact">
    <?php
    if(isset($errors['contact'])){
      echo "<span class = 'text-danger'>".$errors['contact']."</span>";
    }
    ?>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
  </main>

<?php
include_once('footer.php');
?>