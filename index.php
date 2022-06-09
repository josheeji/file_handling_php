
    <?php
  include_once('header.php');

?>
    <a href='addStudent.php' class="btn btn-primary m-3">Add Student</a>
    <?php
    if(!!$message){?>
    <div class="alert alert-success" role="alert">
      <?php echo $message; ?>
      </div>
    <?php
    }
    ?>
    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">ID</th>
                <th scope="col">Class</th>
                <th scope="col">Gender</th>
                <th scope="col">Actions</th>Actions 

              </tr>
            </thead>
            <tbody>
              <?php
              fgets($file);
            while(!feof($file)) {
  
               $student= explode(",",fgets($file));
              ?>
              <tr>
                <th scope="row"></th>
                <td><?php echo $student[0]; ?></td>
                <td><?php echo $student[1]; ?></td>
                <td><?php echo $student[2]; ?></td>
                <td><?php echo $student[3]; ?></td>
                <td><?php echo $student[4]; ?></td>
                <!-- to pass the value -->
                <!-- <td> <a class="btn btn-primary" href="editstudent.php?<?php echo 'name='. $student[0].'&address='.$student[1]. '&id='. $student[2]. '&class='. $student[3]. '&gender='.  $student[4];?>">   Edit</a></td> -->
                <td> <a class="btn btn-primary" href="editstudent.php?<?php echo 'id='. $student[2];?>">   Edit</a>
                <a class="btn btn-danger" href="deletestudent.php?<?php echo 'id='. $student[2];?>">   Delete</a>
              
              </td>


                

              </tr>
                <?php
            }
                ?>
            </tbody>
          </table>
        </div>
      </div>
     
     
    </div>
  </main>

  
  <?php
  include_once('footer.php');
?>