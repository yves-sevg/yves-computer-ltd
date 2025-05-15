<?php
  //Database Connection
  $conn = mysqli_connect('localhost','root','','computer_ltd');
  if(!$conn){
     die('Connection Failed!');
  }
  //Getting information from front end
  if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])){
      $name  = $_POST['name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
     $sql = "INSERT INTO customer(name,username,password) VALUES('$name','$username','$password')";
     $result = mysqli_query($conn,$sql);
     if($result){
           header('Location: home.php');
     }else{
        echo 'Hello world';
     }

  }




?>