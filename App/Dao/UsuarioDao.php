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
			$stmt->closeCursor();
			return $result;
		} catch(PDOException $e){
			echo "Erro Select: ".$e->getMessage();
		}
	}

	public function selectId($id)
	{
		$result= null;
		$sql = "SELECT * FROM {$this->table} WHERE Id = :id";
		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindValue(":id", $id);
			$stmt->execute();
			$result = $stmt->fetch();
			$stmt->closeCursor();
		} catch(PDOException $e){
			echo "Erro SelectId: ".$e->getMessage();
		}
		return $result;
	}

	public function insert(Usuario $u)
	{
		$sql = "INSERT INTO {$this->table} (Login, Nome, Email, Senha, idGrupoUsuario)
				    			VALUE(:login, :nome, :email, :senha, :idgrupousuario)";
		$result = null;

		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			$stmt->bindValue(":login", $u->getLogin());
			$stmt->bindValue(":nome", $u->getNome());
			$stmt->bindValue(":email", $u->getEmail());
			$stmt->bindValue(":senha", $u->getSenha());
			$stmt->bindValue(":idgrupousuario", $u->getIdGrupoUsuario());

			$result = $stmt->execute();
			$stmt->closeCursor();
		} catch(PDOException $e){
			echo "Erro Insert: ".$e->getMessage();
		}
		return $result;
	}

	public function update(Usuario $u)
	{
		$result = null;
		$sql = "UPDATE {$this->table} SET
							Login = :login , 
							Nome = :nome , 
							Email = :email , 
							idGrupoUsuario = :idgrupousuario
				WHERE Id = :id;";

		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			$stmt->bindValue(":id", $u->getId());
			$stmt->bindValue(":login", $u->getLogin());
			$stmt->bindValue(":nome", $u->getNome());
			$stmt->bindValue(":email", $u->getEmail());
			//$stmt->bindValue(":senha", $u->getSenha());
			$stmt->bindValue(":idgrupousuario", $u->getIdGrupoUsuario());

			$result = $stmt->execute();
			$stmt->closeCursor();
		} catch(PDOException $e){
			echo "Erro Update: ".$e->getMessage();
		}
		return $result;
	}

	public function delete(Usuario $u)
	{
		$result = null;
		$sql = "DELETE FROM {$this->table} WHERE Id = :id;";

		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			$stmt->bindValue(":id", $u->getId());

			$result = $stmt->execute();
			$stmt->closeCursor();
		} catch(PDOException $e){
			echo "Erro Delete: ".$e->getMessage();
		}
		return $result;
	}
}