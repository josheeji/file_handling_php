<?php
  include_once('header.php');
  $file = fopen("teacher.txt",'a+');

?>
    <a href='addteacher.php' class="btn btn-primary m-3">Add Teacher</a>
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
              <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Post</th>
                <th scope="col">Gender</th>
                <th scope="col">Gmail</th>
                <th scope="col">Contact</th>
                <th scope="col">Actions</th>Actions 

              </tr>
            </thead>
            <tbody><?php
              fgets($file);
            while(!feof($file)) {
  
               $teacher = explode(",",fgets($file));
              ?>
              <tr>
                <td><?php echo $teacher[0]; ?></td>
                <td><?php echo $teacher[1]; ?></td>
                <td><?php echo $teacher[2]; ?></td>
                <td><?php echo $teacher[3]; ?></td>
                <td><?php echo $teacher[4]; ?></td>
                <td><?php echo $teacher[5]; ?></td>
                <td><?php echo $teacher[6]; ?></td>

                <td> <a class="btn btn-primary" href="editteacher.php?<?php echo 'id='. $teacher[0];?>">   Edit</a>

                <a class="btn btn-danger" href="deleteteacher.php?<?php echo 'id='. $teacher[0];?>">   Delete</a>
              
              </td>
             
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