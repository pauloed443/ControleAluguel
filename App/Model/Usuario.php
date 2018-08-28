<?php 
namespace App\Model;

class Usuario {
	
	private $id;
	private $login;
	private $nome;
	private $email;
	private $senha;
	private $idGrupoUsuario;

	public function getId()
	{
		return $this->iscliente;
	}
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getLogin()
	{
		return $this->login;
	}
	public function setLogin($login)
	{
		$this->login = $login;
	}

	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getSenha()
	{
		return $this->senha;
	}
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getIdGrupoUsuario()
	{
		return $this->GrupoUsuario;
	}
	public function setIdGrupoUsuario($GrupoUsuario)
	{
		$this->GrupoUsuario = $GrupoUsuario;
	}

}
