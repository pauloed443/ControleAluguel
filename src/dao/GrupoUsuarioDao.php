<?php
namespace Dao;
define("DS", DIRECTORY_SEPARATOR);
require_once __DIR__.DS.'vendor'.DS.'autoload.php';

use Dao\Conexao;
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
}