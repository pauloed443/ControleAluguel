<?php
namespace App\Controller;

use App\Dao\GrupoUsuarioDao;

class GrupoUsuarioController {

	private $grupousuarioDao;

	public function __construct() {
		if (empty($grupousuarioDao)) {
			$this->grupousuarioDao = new GrupoUsuarioDao();
		}
	}
	
	public function selectAll() {
		//$grupousuarioDao = new \App\Dao\GrupoUsuarioDao;
		echo var_dump($this->grupousuarioDao);
		return array('grupo_usuarios'=>$this->grupousuarioDao->selectAll());
	}

	public function selectId($id) {
		//$grupousuarioDao = new \App\Dao\GrupoUsuarioDao;
		return array('grupo_usuario'=>$this->grupousuarioDao->selectId($id));
	}

	public function insert($dados) {
		//$grupousuarioDao = new \App\Dao\GrupoUsuarioDao;
		echo var_dump($this->grupousuarioDao);
		$grupousuarioDao->insert($dados);
		echo var_dump($dados);
	}

	public function update($dados) {
		//$grupousuarioDao = new \App\Dao\GrupoUsuarioDao;
		echo "Salvou Id: ".$dados['id'];
	}

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	session_start();
	
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