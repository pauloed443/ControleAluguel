<?php

namespace App\Controller;

/**
 * 
 */
class PessoaController {

	public function selectAll() {
		$pessoaDao = new \App\Dao\PessoaDao();
		return array('pessoas'=>$pessoaDao::selectAll());
	}
	
}