<?php
  include_once("classes/DatabaseCrud.php");

  $crud = new DatabaseCrud();

  $query = "SELECT * FROM users";
  $result = $crud->getData($query);
?>

<html>
<head>	
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Paula Melo - CRUD PHP</title>
    <!-- <link href="style/css/style.css" rel="stylesheet"> -->
</head>

<body>
  <a href="insert.html">Cadastrar novo usuário</a><br/><br/>

	<table width='80%' border=10>

	<tr bgcolor='#CCCCCC'>
		<td>Nome</td>
		<td>Email</td>
        <td>Cidade</td>
        <td>Senha</td>
	</tr>
	<?php 
	foreach ($result as $key => $res) {
    echo "<tr>";
    echo "<td>".$res['name']."</td>";
    echo "<td>".$res['email']."</td>";	
    echo "<td>".$res['city']."</td>";
    echo "<td>".$res['password']."</td>";
    echo "<td>
            <a href=\"update.php?id=$res[id]\">Editar</a> | 
            <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Confirmar exclusão?')\">Excluir</a>
          </td>";		
	}
	?>
	</table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>