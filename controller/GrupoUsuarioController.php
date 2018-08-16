<?php

require_once '../dao/GrupoUsuarioDao.php';
/**
 * 
 */
class GrupoUsuarioController {
	
	public function selectAll() {
		$grupousuarioDao = new GrupoUsuarioDao;
		return array('grupo_usuarios'=>$grupousuarioDao::selectAll());
	}

	public function insert($dados)
	{
		echo "Salvou";
	}

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	//$url = str_replace("/ControleAluguel/", "", $_SERVER["REQUEST_URI"]);
	session_start();
	$url = $_SESSION['url'];
	$grupousuariocontroller = new GrupoUsuarioController;

	if ($url == 'view/grupo_usuario/new.php?') {
		$grupousuariocontroller->insert($_POST);
	}

} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	session_start();
	$url = $_SESSION['url'];
	$grupousuariocontroller = new GrupoUsuarioController;
	
	if ($url == 'view/grupo_usuario/new.php') {
		# code...
	}

}