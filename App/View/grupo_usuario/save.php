<?php
define("DS", DIRECTORY_SEPARATOR);
require_once __DIR__.DS .'..'.DS.'..'.DS.'..'.DS.'vendor'.DS.'autoload.php';

if (isset($_POST)) {
	//$gpuc = new \App\Controller\GrupoUsuarioController();
	//var_dump($gpuc);
	$return = (new \App\Controller\GrupoUsuarioController())->insert($_POST);
	if ($return) {
		header("location: grupo_usuario.php");
	} else {
		echo "Erro ao inserir os dados.";
	}
}

?>