<?php
  include_once("classes/DatabaseCrud.php");

  $crud = new DatabaseCrud();

  if(isset($_POST['update']))
  {	
    $id = $_POST['id'];  
    $name = $_POST['name'];
    $email = ($_POST['email']);
    $city = $_POST['city'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET name='$name', email='$email', city ='$city', password='$password' WHERE id='$id'";
    $crud->execute($sql);

    header("Location: index.php");
  }
?>