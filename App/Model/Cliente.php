<?php 
namespace App\Model;
//require_once 'Pessoa.php';
/**
 * 
 */
public class Cliente extends Pessoa {
	
	private $iscliente;

	public function getIsCliente()
	{
		return $this->iscliente;
	}
	public function setIsCliente($iscliente)
	{
		$this->iscliente = $iscliente;
	}

}
