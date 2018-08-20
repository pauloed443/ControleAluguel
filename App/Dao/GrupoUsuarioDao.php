<?php
namespace App\Dao;

use PDO, PDOException;
//require_once 'Conexao.php';
/**
 * 
 */
class GrupoUsuarioDao extends Conexao {
	
	public function selectAll()	{
		$sql = "SELECT * FROM grupo_usuario";
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

	public function selectId($id)
	{
		$sql = "SELECT * FROM grupo_usuario WHERE id = :id";
		$result= null;
		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindValue(":id", $id);
			$stmt->execute();
			$result = $stmt->fetch();
		} catch(PDOException $e){
			echo "Erro SelectId: ".$e->getMessage();
		}
		return $result;
	}
}