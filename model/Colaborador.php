<?php 
require_once 'Pessoa.php';
/**
 * 
 */
public class Colaborador extends Pessoa {
	
	private $iscolaborador;

	public function getIsColaborador()
	{
		return $this->iscolaborador;
	}
	public function setIsColaborador($iscolaborador)
	{
		$this->iscolaborador = $iscolaborador;
	}

}
