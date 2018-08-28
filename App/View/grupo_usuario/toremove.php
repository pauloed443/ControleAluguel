<?php
define("DS", DIRECTORY_SEPARATOR);
require_once __DIR__.DS .'..'.DS.'..'.DS.'..'.DS.'vendor'.DS.'autoload.php';

if (isset($_POST['id'])) {
	//$gpuc = new \App\Controller\GrupoUsuarioController();
	//var_dump($gpuc);
	$return = (new \App\Controller\GrupoUsuarioController())->remove($_POST['id']);
	if ($return) {
		header("location: grupo_usuario.php");
	} else {
		echo "Erro ao excluir os dados.";
	}
}

?>