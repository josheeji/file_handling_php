<?php
include_once('header.php');
$file = fopen("subject.txt",'a+');

?>
<a href='addsubject.php' class="btn btn-primary m-3">Add Subject</a>
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
                <th scope="col">S_id</th>
                <th scope="col">S_Name</th>
                <th scope="col">PR. FM</th>
                <th scope="col">PR. PM</th>
                <th scope="col">TH. FM</th>
                <th scope="col">TH. FM</th>
                <th scope="col">TH. PM</th>
                <th scope="col">Actions</th>Actions 
                
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <th scope="row"></th>
                <td><?php echo $subject[0]; ?></td>
                <td><?php echo $subject[1]; ?></td>
                <td><?php echo $subject[2]; ?></td>
                <td><?php echo $subject[3]; ?></td>
                <td><?php echo $subject[4]; ?></td>
                <td><?php echo $subject[5]; ?></td>

                <td> <a class="btn btn-primary" href="editsubject.php?<?php echo 's_id='. $subject[0];?>">   Edit</a>
                <a class="btn btn-danger" href="deletesubject.php?<?php echo 's_id='. $subject[0];?>">   Delete</a>
                </td>
              </tr>
            </thead>
            <tbody>
             <?php
        
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