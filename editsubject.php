<?php
include_once('header.php');
?>

    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">
        <form action ="editstoresubject.php?id=<?php echo $_GET['id']  ;?>" method = "POST">
          <?php
   $errors=$_GET["errors"];
//    print_r($_GET);
$filename = "subject.txt";
$file = fopen("subject.txt", "r");
fgets($file);
$subject = [];
while(!feof($file)) {

 $tempsubject= explode(",",fgets($file));
 if($tempsubject[2]==$_GET['id']){
     $subject= $tempsubject;
     
 }
}

?>
</div>
  <div class="mb-3">
    <label for="s_id" class="form-label">S_ID</label>
    <input name= "s_id" value="<?php echo $subject[0] ;?>" type="number" class="form-control <?php if(isset($errors['s_id'])){ echo 'is-invalid';}?>" id="s_id" aria-describedby="s_id">
    <?php
  if(isset($errors['s_id'])){
    echo "<span class = 'text-danger'>".$errors['s_id']."</span>";
  }
  ?>
        
  <div class="mb-3">
    <label for="s_name" class="form-label"> S_Name</label>
    <!-- edit garda kheri value access garna ko lagi value = use hunxa -->
    <input name = "s_name" value = "<?php echo $student[1]; ?>" type="text" class="form-control <?php if(isset($errors['name'])){ echo 'is-invalid';}?>" id="s_name" aria-describedby="s_name">
      <?php
  if(isset($errors['s_name'])){
    echo "<span class = 'text-danger'>* ".$errors['s_name']."</span>";
  }

?>
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input name="address" value= "<?php echo $student[1] ;?>" type="text" class="form-control <?php if(isset($errors['address'])){ echo 'is-invalid';}?>" id="address" aria-decsribedy=""address>
    <?php
  if(isset($errors['address'])){
    echo "<span class = 'text-danger'>".$errors['address']."</span>";
  }

?>
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input name= "id" value="<?php echo $student[2] ;?>" type="number" class="form-control <?php if(isset($errors['id'])){ echo 'is-invalid';}?>" id="id" aria-describedby="id">
    <?php
  if(isset($errors['id'])){
    echo "<span class = 'text-danger'>".$errors['id']."</span>";
  }
  ?>
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">Class</label>
    <input name= "class" type="text" value ="<?php echo $student[3];?>" class="form-control <?php if(isset($errors['class'])){ echo 'is-invalid';}?>" id="class" aria-describedby="class">
    <?php
    if(isset($errors['class'])){
      echo "<span class = 'text-danger'>".$errors['class']."</span>";
    }
    ?>
  </div>
  
  
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
if ($student[4]=="female"){
echo "checked";
}
 ?> id="flexRadioDefault2">
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