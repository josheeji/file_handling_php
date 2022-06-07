<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Student Info</title>

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
    

    <div class="row g-5 p-3">
      <div class="card">
        <div class="card-body">
        <form action ="store.php" method = "post">
          <?php
  $errors=$_GET["errors"];
?>
        
  <div class="mb-3">
    <label for="name" class="form-label"> Name</label>
    <input name = "name" type="text" class="form-control <?php if(isset($errors['name'])){ echo 'is-invalid';}?>" id="name" aria-describedby="name">
      <?php
  if(isset($errors['name'])){
    echo "<span class = 'text-danger'>* ".$errors['name']."</span>";
  }

?>
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input name="address" type="text" class="form-control <?php if(isset($errors['address'])){ echo 'is-invalid';}?>" id="address" aria-decsribedy=""address>
    <?php
  if(isset($errors['address'])){
    echo "<span class = 'text-danger'>".$errors['address']."</span>";
  }

?>
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input name= "id" type="number" class="form-control <?php if(isset($errors['id'])){ echo 'is-invalid';}?>" id="id" aria-describedby="id">
    <?php
  if(isset($errors['id'])){
    echo "<span class = 'text-danger'>".$errors['id']."</span>";
  }
  ?>
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">Class</label>
    <input name= "class" type="text" class="form-control <?php if(isset($errors['class'])){ echo 'is-invalid';}?>" id="class" aria-describedby="class">
    <?php
    if(isset($errors['class'])){
      echo "<span class = 'text-danger'>".$errors['class']."</span>";
    }
    ?>
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

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
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
