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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Admission Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insert.php" method="POST">
        <div class="mb-2">
                <label for="">Id</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Father's Name</label>
                <input type="text" name="father" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Course</label>
                <input type="text" name="course" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Mobile</label>
                <input type="text" name="mobile" maxlength="10" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Adhar No.</label>
                <input type="text" name="adhar" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Address</label>
                <textarea type="text" name="address" class="form-control"></textarea>
            </div>
            <div class="mb-2">
            <input type="submit" value="Submit" name="submit" class="form-control btn btn-dark">
            </div>
        </form>
      </div>
    
    </div>
  </div>
</div>

<!-- searchbar & addbtn -->
<div class="container">
 <div class="box my-4">

 <div class="d-flex">
 <button class="btn btn-outline-dark me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">Add+</button>
        <input class="form-control me-2" type="search" id="input-search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" onclick="searchBtn()" type="submit">Search</button>
      </div>
 </div>
   </div>

<!-- student record -->

  <?php

   $query = "SELECT * FROM students";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);

  ?>
<div class="container stu-table">
    <div class="box">
        <div class="title">
            <h3>Student Record</h3>
        </div>
    <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Father's Name</th>
      <th>Course</th>
      <th>Mobile</th>
      <th>Adhar No.</th>
      <th>Address</th>
      <th colspan="2">Opration</th>
    </tr>
  </thead>
  <tbody id="table-data">

   <?php
 if($total != 0){
    
  while($result = mysqli_fetch_assoc($data)){
      echo "
      <tr>
          <td>".$result['id']."</td>
          <td>".$result['name']."</td>
          <td>".$result['father']."</td>
          <td>".$result['course']."</td>
          <td>".$result['mobile']."</td>
          <td>".$result['adhar']."</td>
          <td>".$result['address']."</td>
          <td><a href='update.php?id=$result[id]&nam=$result[name]&fa=$result[father]&co=$result[course]&mob=$result[mobile]& adh=$result[adhar]&adrs=$result[address]' data-bs-toggle='popmodal' data-bs-target='#exampleModal' class='btn btn-dark'>Edit</a> </td>
<td><a class='btn btn-danger' href='delete.php?id=$result[id]'>Delete</a> </td>
    </tr>";
  }
  
}else{
  echo "<script>alert('data is not found')</script>";

}
   ?>
    
   
  </tbody>
</table>
    </div>
</div>




      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

      <script src="js.js"></script>
  </body>
</html>