<?php

 require 'database.php';

 $id = $_GET['id'];
 $data = "DELETE FROM students WHERE id='$id'";
 $result = mysqli_query($conn, $data);

 if($result){
  echo "<script>alert('Delete Successfully')</script>";
  echo "<script>window.open('index.php','_self')</script>";

  ?>
   <META http-equiv="Refresh" content="0" url="http://localhost/admission/index.php">

  <?php
 }
 else{
  echo "<script>alert('Delete filed')</script>";
    echo "<script>window.open('index.php','_self')</script>";
 }


?>