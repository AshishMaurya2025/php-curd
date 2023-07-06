<?php

 require 'database.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contect</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>


<!-- addmission form  -->
<!-- Modal -->

 <div class="header">
  <div class="text">
    <h2>Update Form</h2>
  </div>
 </div>
 <div class="container">
       <div class="row">
      <div class="col-md-6 offset-md-3" >
        <div class="box login-box">
        <form action="#" method="GET">
            <div class="mb-2">
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" value="<?php echo $_GET['id']?>">
            </div>
            <div class="mb-2">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $_GET['nam']?>">
            </div>
            <div class="mb-2">
                <label for="">Father's Name</label>
                <input type="text" name="father" class="form-control" value="<?php echo $_GET['fa']?>">
            </div>
            <div class="mb-2">
                <label for="">Course</label>
                <input type="text" name="course" class="form-control" value="<?php echo $_GET['co']?>">
            </div>
            <div class="mb-2">
                <label for="">Mobile</label>
                <input type="text" name="mobile" maxlength="10" class="form-control" value="<?php echo $_GET['mob']?>">
            </div>
            <div class="mb-2">
                <label for="">Adhar No.</label>
                <input type="text" name="adhar" class="form-control" value="<?php echo $_GET['adh']?>">
            </div>
            <div class="mb-2">
                <label for="">Address</label>
              <input type="text" name="address" class="form-control" value="<?php echo $_GET['adrs']?>">
            </div>
            <div class="mb-2">
            <input type="submit" value="Submit" name="submit" class="form-control btn btn-dark">
            </div>
        </form>
      </div>
    
    </div>
  </div>
  </div>

  <?php

   if(isset($_GET['submit'])){
     
    $id = $_GET['id'];
    $name = $_GET['name'];
    $father = $_GET['father'];
    $course = $_GET['course'];
    $mobile = $_GET['mobile'];
    $adhar = $_GET['adhar'];
    $address = $_GET['address'];

     $sql = "UPDATE students set  name='$name', father='$father', course='$course',mobile='$mobile',adhar='$adhar',address='$address' where id='$id'";

     $que = mysqli_query($conn, $sql);

     if($que){
      echo "<script>alert('Update Successfully')</script>";
      echo "<script>window.open('index.php','_self')</script>";
     }else{
      echo "<script>alert('Update filed')</script>";
        echo "<script>window.open('index.php','_self')</script>";
     }
     
   }

   
  ?>




      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

      <script src="js.js"></script>
  </body>
</html>