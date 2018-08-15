<!DOCTYPE html>
<html>
<head>
	<title>Controle Aluguel</title>
</head>
<body>
	<?php //header("location: view/arquivo.php") 
	//require_once 'dao/Conexao.php';
	require_once 'controller/PessoaController.php';
	$conn = new PessoaController;
	
	echo "<pre>";
	$r = $conn::selectAll();
	echo "<table>";
		foreach ($r["pessoas"] as $key => $value) {
			echo "id do :".$value["Id"].'<br/>';
		}
	echo "</table>";
	var_dump($conn::selectAll());
	?>
</body>
</html>