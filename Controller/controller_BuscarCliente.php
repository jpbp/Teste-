<?php  

include("../Model/Cliente.php");
include("../Persistence/Conection.php");
include("../Persistence/ClienteDao.php");


$nome = $_POST["nome"];

$c1= new Cliente($nome,"","","","","","","","","","","");

//conexao com banco de dados
$con = new Conection("localhost","root","123","lojahogwarts");
$con->conectar();

$cDAO = new ClienteDao();

$tabela = $cDAO->buscarCliente($c1,$con->getLink());




if( mysqli_num_rows($tabela) == 0 ){
	echo "o nome: ".$nome." Não esta cadastrado no sistema ";
}
else{
	$openTable="<table style=\"width:100%\" border=\"1\">
		<tr>
			<th>Nome</th>
			<th>CPF</th> 
			<th>Celular</th>
			<th> <th>
		</tr>";

	$bodyTable = "" ;

	while($row = mysqli_fetch_assoc($tabela)){
			$bodyTable = $bodyTable."<tr>
				<td>".$row['nome']."</td>
				<td>".$row['cpf']."</td> 
				<td>".$row['celular']."</td>
				<td> <a href="."../View/AlterarCliente.php"."> <button>excluir</button><a/> <a href="."../View/AlterarCliente.php"."> <button>alterar</button><a/> </td>
			</tr>";
		}
	$closeTable ="</table>";

	echo "<!DOCTYPE html>
			<html lang=\"pt-br\">

			<header>
			<meta charset=\"utf-8\">
			<title> Titulo </title>
			</header>

			<body>".$openTable.$bodyTable.$closeTable.
				

			"</body>

			</html>";
}

?>

