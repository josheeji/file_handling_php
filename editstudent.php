<?php
include_once('header.php');
?>

    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">
        <form action ="editstore.php?id=<?php echo $_GET['id']  ;?>" method = "post">
          <?php
   $errors=$_GET["errors"];
//    print_r($_GET);
$filename = "student.txt";
$file = fopen("student.txt", "r");
fgets($file);
$student = [];
while(!feof($file)) {

 $tempStudent= explode(",",fgets($file));
 if($tempStudent[2]==$_GET['id']){
     $student= $tempStudent;
     var_dump($student, $student[4]=='male');
     break;
 }
}

?>
        
  <div class="mb-3">
    <label for="name" class="form-label"> Name</label>
    <!-- edit garda kheri value access garna ko lagi value = use hunxa -->
    <input name = "name" value = "<?php echo $student[0]; ?>" type="text" class="form-control <?php if(isset($errors['name'])){ echo 'is-invalid';}?>" id="name" aria-describedby="name">
      <?php
  if(isset($errors['name'])){
    echo "<span class = 'text-danger'>* ".$errors['name']."</span>";
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