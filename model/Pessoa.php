<?php 

/**
 * 
 */
class Pessoa {
	
	private $id;
	private $nome;
	private $tipoPessoa;
	private $email;
	private $cnpj;
	private $cpf;
	private $rg;
	private $obs;
	private $iscliente;
	private $iscolaborador;

	public function getId()
	{
		return $this->id;
	}
	public function setId($Id)
	{
		$this->id = $Id;
	}

	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($Nome)
	{
		$this->nome = $Nome;
	}

	public function getTipoPessoa()
	{
		return $this->tipoPessoa;
	}
	public function setTipoPessoa($TipoPessoa)
	{
		$this->tipoPessoa = $TipoPessoa;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($Email)
	{
		$this->email = $Email;
	}

	public function getCnpj()
	{
		return $this->cnpj;
	}
	public function setCnpj($cnpj)
	{
		$this->cnpj = $cnpj;
	}

	public function getCpf()
	{
		return $this->cpf;
	}
	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	public function getRg()
	{
		return $this->rg;
	}
	public function setRg($rg)
	{
		$this->rg = $rg;
	}

	public function getObs()
	{
		return $this->obs;
	}
	public function setObs($obs)
	{
		$this->obs = $obs;
	}

	public function getIsCliente()
	{
		return $this->iscliente;
	}
	public function setIsCliente($iscliente)
	{
		$this->iscliente = $iscliente;
	}

	public function getIsColaborador()
	{
		return $this->iscolaborador;
	}
	public function setIsColaborador($iscolaborador)
	{
		$this->iscolaborador = $iscolaborador;
	}

}
