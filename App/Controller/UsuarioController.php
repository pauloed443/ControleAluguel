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

	public function selectId($id) {
		return array('usuario'=>$this->ud->selectId($id));
	}

	public function insert($dados) {
		$login = $dados['login']; 
		$nome = $dados['nome']; 
		$email = $dados['email']; 
		$senha = $dados['senha']; 
		$idGrupoUsuario = $dados['idGrupoUsuario'];

		$this->u->setLogin($login);
		$this->u->setNome($nome);
		$this->u->setEmail($email);
		$this->u->setSenha(md5($senha));
		$this->u->setIdGrupoUsuario($idGrupoUsuario);

		return $this->ud->insert($this->u);
	}

	public function update($dados) {
		$id = $dados['id']; 
		$login = $dados['login']; 
		$nome = $dados['nome']; 
		$email = $dados['email']; 
		//$senha = $dados['senha']; 
		$idGrupoUsuario = $dados['idGrupoUsuario'];
		
		$this->u->setId($id);
		$this->u->setLogin($login);
		$this->u->setNome($nome);
		$this->u->setEmail($email);
		//$this->u->setSenha(md5($senha));
		$this->u->setIdGrupoUsuario($idGrupoUsuario);

		return $this->ud->update($this->u);
	}

}