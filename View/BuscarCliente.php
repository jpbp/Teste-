<!DOCTYPE html>
<html>
<head>
	<title>Buscar Bruxo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Buscar Bruxo</h1>
	<div>
		  <form method="POST" action="../Controller/controller_BuscarCliente.php">

		    <label for="nome"></label>
		    <input type="text"  name="nome" placeholder="Nome a ser buscado">
		    <button class="button" type="submit" name="Buscar">Buscar</button>
		</form>		
</body>
</html>