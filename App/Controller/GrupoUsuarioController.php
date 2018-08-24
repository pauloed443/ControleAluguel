<?php
namespace App\Controller;

/**
 * 
 */
class GrupoUsuarioController {
	
	public function selectAll() {
		$grupousuarioDao = new \App\Dao\GrupoUsuarioDao;
		return array('grupo_usuarios'=>$grupousuarioDao::selectAll());
	}

	public function selectId($id) {
		$grupousuarioDao = new \App\Dao\GrupoUsuarioDao;
		return array('grupo_usuario'=>$grupousuarioDao::selectId($id));
	}

	public function insert($dados) {

		$grupousuarioDao = new \App\Dao\GrupoUsuarioDao;
		//$result = $grupousuarioDao::insert($dados);
		echo var_dump($dados);
	}

	public function update($dados) {
		//$grupousuarioDao = new \App\Dao\GrupoUsuarioDao;
		echo "Salvou Id: ".$dados['id'];
	}

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	session_start();
	$url = str_replace("/ControleAluguel/", "", $_SERVER["REQUEST_URI"]);
	
	$url = $_SESSION['url'];
	$grupousuariocontroller = new GrupoUsuarioController;

	if ($url == 'App/View/grupo_usuario/new.php') {
		$grupousuariocontroller->insert($_POST);
	}

} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	$url = $_SESSION['url'];
	$grupousuariocontroller = new GrupoUsuarioController;
	
	if ($url == 'App/View/grupo_usuario/new.php') {
		echo "string";
	}

}