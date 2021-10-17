<html>
<head>
	<title>Cadastrar usuário</title>
</head>
<body>
<?php
  include_once("classes/DatabaseCrud.php");

  $crud = new DatabaseCrud();

  if (isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email, city, password) VALUES ('$name', '$email', '$city', '$password')";

    $crud->execute($sql);
    header('Location: index.php');
  }
?>
</body>
</html>