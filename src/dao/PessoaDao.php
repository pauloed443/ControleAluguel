<?php
require_once 'Conexao.php';
/**
 * 
 */
class PessoaDao extends Conexao {

	public function selectAll()
	{
		$sql = "SELECT * FROM pessoa";
		$result= null;
		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$result = $stmt->fetchAll();
		} catch(PDOException $e){
			echo "Erro Select: ".$e->getMessage();
		}
		return $result;
	}

}