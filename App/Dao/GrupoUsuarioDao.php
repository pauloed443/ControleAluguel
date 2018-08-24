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

	public function insert($post)
	{
		$sql = "INSERT INTO grupo_usuario SET 
								nome=:nome, 
								descricao= :descricao ,

								pessoa_criar= :pessoa_criar ,
				    			pessoa_editar= :pessoa_editar ,
				    			pessoa_excluir= :pessoa_excluir ,
				    			pessoa_visualizar= :pessoa_visualizar ,

				    			tipo_colaborador_criar= :tipo_colaborador_criar ,
				    			tipo_colaborador_editar= :tipo_colaborador_editar ,
				    			tipo_colaborador_excluir= :tipo_colaborador_excluir ,
				    			tipo_colaborador_visualizar= :tipo_colaborador_visualizar ,

				    			forma_pagamento_criar= :forma_pagamento_criar ,
				    			forma_pagamento_editar= :forma_pagamento_editar ,
				    			forma_pagamento_excluir= :forma_pagamento_excluir ,
				    			forma_pagamento_visualizar= :forma_pagamento_visualizar ,

				    			servico_criar= :servico_criar ,
				    			servico_editar= :servico_editar ,
				    			servico_excluir= :servico_excluir ,
				    			servico_visualizar= :servico_visualizar ,

				    			ordem_servico_criar= :ordem_servico_criar ,
				    			ordem_servico_editar= :ordem_servico_editar ,
				    			ordem_servico_excluir= :ordem_servico_excluir ,
				    			ordem_servico_visualizar= :ordem_servico_visualizar ,

				    			relatorio_visualizar= :relatorio_visualizar ,

				    			contas_receber_criar= :contas_receber_criar ,
				    			contas_receber_editar= :contas_receber_editar ,
				    			contas_receber_baixar= :contas_receber_baixar ,
				    			contas_receber_cancelar= :contas_receber_cancelar ,
				    			contas_receber_estornar= :contas_receber_estornar ,
				    			contas_receber_visualizar= :contas_receber_visualizar ,

				    			movimento_caixa_criar= :movimento_caixa_criar ,
				    			movimento_caixa_editar= :movimento_caixa_editar ,
				    			movimento_caixa_excluir= :movimento_caixa_excluir ,
				    			movimento_caixa_visualizar= :movimento_caixa_visualizar ,

				    			empresa_editar= :empresa_editar ,
				    			empresa_visualizar= :empresa_visualizar ,

				    			email_editar= :email_editar ,
				    			email_visualizar= :email_visualizar ,

				    			usuario_criar= :usuario_criar ,
				    			usuario_editar= :usuario_editar ,
				    			usuario_excluir= :usuario_excluir ,
				    			usuario_visualizar= :usuario_visualizar ,

				    			grupo_usuario_criar= :grupo_usuario_criar ,
				    			grupo_usuario_editar= :grupo_usuario_editar ,
				    			grupo_usuario_excluir= :grupo_usuario_excluir ,
				    			grupo_usuario_visualizar= :grupo_usuario_visualizar 
								";
		$result= null;

		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			$stmt->bindValue(":nome", $post['nome']);
			$stmt->bindValue(":descricao", $post['descricao']);
			$stmt->bindValue(":pessoa_criar", $post['pessoa_criar']);
			$stmt->bindValue(":pessoa_editar", $post['pessoa_editar']);
			$stmt->bindValue(":pessoa_excluir", $post['pessoa_excluir']);
			$stmt->bindValue(":pessoa_visualizar", $post['pessoa_visualizar']);
			$stmt->bindValue(":tipo_colaborador_criar", $post['tipo_colaborador_criar']);
			$stmt->bindValue(":tipo_colaborador_editar", $post['tipo_colaborador_editar']);
			$stmt->bindValue(":tipo_colaborador_excluir", $post['tipo_colaborador_excluir']);
			$stmt->bindValue(":tipo_colaborador_visualizar", $post['tipo_colaborador_visualizar']);
			$stmt->bindValue(":forma_pagamento_criar", $post['forma_pagamento_criar']);
			$stmt->bindValue(":forma_pagamento_editar", $post['forma_pagamento_editar']);
			$stmt->bindValue(":forma_pagamento_excluir", $post['forma_pagamento_excluir']);
			$stmt->bindValue(":forma_pagamento_visualizar", $post['forma_pagamento_visualizar']);
			$stmt->bindValue(":servico_criar", $post['servico_criar']);
			$stmt->bindValue(":servico_editar", $post['servico_editar']);
			$stmt->bindValue(":servico_excluir", $post['servico_excluir']);
			$stmt->bindValue(":servico_visualizar", $post['servico_visualizar']);
			$stmt->bindValue(":ordem_servico_criar", $post['ordem_servico_criar']);
			$stmt->bindValue(":ordem_servico_editar", $post['ordem_servico_editar']);
			$stmt->bindValue(":ordem_servico_excluir", $post['ordem_servico_excluir']);
			$stmt->bindValue(":ordem_servico_visualizar", $post['ordem_servico_visualizar']);
			$stmt->bindValue(":relatorio_visualizar", $post['relatorio_visualizar']);
			$stmt->bindValue(":contas_receber_criar", $post['contas_receber_criar']);
			$stmt->bindValue(":contas_receber_editar", $post['contas_receber_editar']);
			$stmt->bindValue(":contas_receber_baixar", $post['contas_receber_baixar']);
			$stmt->bindValue(":contas_receber_cancelar", $post['contas_receber_cancelar']);
			$stmt->bindValue(":contas_receber_estornar", $post['contas_receber_estornar']);
			$stmt->bindValue(":contas_receber_visualizar", $post['contas_receber_visualizar']);
			$stmt->bindValue(":movimento_caixa_criar", $post['movimento_caixa_criar']);
			$stmt->bindValue(":movimento_caixa_editar", $post['movimento_caixa_editar']);
			$stmt->bindValue(":movimento_caixa_excluir", $post['movimento_caixa_excluir']);
			$stmt->bindValue(":movimento_caixa_visualizar", $post['movimento_caixa_visualizar']);
			$stmt->bindValue(":empresa_editar", $post['empresa_editar']);
			$stmt->bindValue(":empresa_visualizar", $post['empresa_visualizar']);
			$stmt->bindValue(":email_editar", $post['email_editar']);
			$stmt->bindValue(":email_visualizar", $post['email_visualizar']);
			$stmt->bindValue(":usuario_criar", $post['usuario_criar']);
			$stmt->bindValue(":usuario_editar", $post['usuario_editar']);
			$stmt->bindValue(":usuario_excluir", $post['usuario_excluir']);
			$stmt->bindValue(":usuario_visualizar", $post['usuario_visualizar']);
			$stmt->bindValue(":grupo_usuario_criar", $post['grupo_usuario_criar']);
			$stmt->bindValue(":grupo_usuario_editar", $post['grupo_usuario_editar']);
			$stmt->bindValue(":grupo_usuario_excluir", $post['grupo_usuario_excluir']);
			$stmt->bindValue(":grupo_usuario_visualizar", $post['grupo_usuario_visualizar']);

			$result = $stmt->execute();
		} catch(PDOException $e){
			echo "Erro Insert: ".$e->getMessage();
		}
		return $result;
	}
}