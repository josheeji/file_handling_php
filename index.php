 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Student Info · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

    

    

<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <?php
    $filename = "student.txt";
    $file = fopen("student.txt", r);
    $message=$_GET["message"];
      ?>   
<div class="container-fluid">
  <main>
    
    
    <header>

      <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
  
            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
              <li>
                <a href="#" class="nav-link text-secondary">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                  Students
                </a>
              </li>
            
            </ul>
          </div>
        </div>
      </div>
     
    </header>
    
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

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
