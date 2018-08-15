<?php

require_once './dao/PessoaDao.php';

/**
 * 
 */
class PessoaController {

	public function selectAll() {
		$pessoaDao = new PessoaDao;
		return array('pessoas'=>$pessoaDao::selectAll());
	}
	
}