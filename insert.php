<?php

 require 'database.php';

 if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $father = $_POST['father'];
    $course = $_POST['course'];
    $mobile = $_POST['mobile'];
    $adhar = $_POST['adhar'];
    $address = $_POST['address'];

    if($id != "" && $name != "" && $father != "" && $course != "" && $mobile != "" && $adhar != "" && $address != ""){

     $sql = "INSERT INTO students VALUES('$id','$name','$father','$course','$mobile','$adhar','$address')";
     $data = mysqli_query($conn, $sql);

     if($data){
        echo "<script>alert('Submited Successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
     }

    }else{
        echo "<script>alert('all field is requaired')</script>";
        echo "<script>window.open('index.php','_self')</script>";

    }
 }


?>

