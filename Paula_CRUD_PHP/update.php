<?php
  include_once("classes/DatabaseCrud.php");

  $crud = new DatabaseCrud();

  $id = $_GET['id'];

  $sql = "SELECT * FROM users WHERE id='$id'";
  $result = $crud->getData($sql);

  foreach ($result as $results) {
    $name = $results['name'];
    $email = $results['email'];
    $city = $results['city'];
    $password = $results['password'];
  }
?>

<html>
<head>	
	<title>Editar Cadastro</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form_execute" method="post" action="updatedItems.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
 
            <tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>

      <tr> 
				<td>Cidade</td>
				<td><input type="text" name="city" value="<?php echo $city;?>"></td>
			</tr>

      <tr> 
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $password;?>"></td>
			</tr>

            <tr>
				<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>