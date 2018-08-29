<?php
define("DS", DIRECTORY_SEPARATOR);
require_once __DIR__.DS .'..'.DS.'..'.DS.'..'.DS.'vendor'.DS.'autoload.php';

if (isset($_POST)) {
	$return = (new \App\Controller\UsuarioController())->update($_POST);
	if ($return) {
		header("location: usuario.php");
	} else {
		echo "Erro ao Atualizar os dados.";
	}
}

?>