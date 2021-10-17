<?php
  include_once("classes/DatabaseCrud.php");

  $crud = new DatabaseCrud();
  $id = $_GET['id'];

  $crud->delete('users', $id);
  header('Location: index.php');
?>