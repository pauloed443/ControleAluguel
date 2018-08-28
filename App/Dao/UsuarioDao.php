<?php
namespace App\Dao;

use PDO, PDOException;
use App\Model\Usuario;

class UsuarioDao extends Conexao {

	protected $table = 'usuario';
	
	public function selectAll()	{
		$sql = "SELECT * FROM {$this->table}";
		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		} catch(PDOException $e){
			echo "Erro Select: ".$e->getMessage();
		}
		
	}

}