<?php
namespace App\Controller;

use App\Dao\UsuarioDao;
use App\Model\Usuario;

class UsuarioController {

	private $ud;
	private $u;

	public function __construct() {
		if (is_null($this->ud)) {
			$this->ud = new UsuarioDao();
			$this->u = new Usuario();
		}
	}
	
	public function selectAll() {
		return array('usuarios'=>$this->ud->selectAll());
	}

}