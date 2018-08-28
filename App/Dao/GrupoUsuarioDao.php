<?php
namespace App\Dao;

use PDO, PDOException;
use App\Model\GrupoUsuario;

class GrupoUsuarioDao extends Conexao {

	protected $table = 'grupo_usuario';
	
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

	public function selectId($id)
	{
		$sql = "SELECT * FROM {$this->table} WHERE id = :id";
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
		$sql = "INSERT INTO {$this->table} (
								nome, 
								descricao ,

								pessoa_criar ,
				    			pessoa_editar ,
				    			pessoa_excluir ,
				    			pessoa_visualizar ,

				    			tipo_colaborador_criar ,
				    			tipo_colaborador_editar ,
				    			tipo_colaborador_excluir ,
				    			tipo_colaborador_visualizar ,

				    			forma_pagamento_criar ,
				    			forma_pagamento_editar ,
				    			forma_pagamento_excluir ,
				    			forma_pagamento_visualizar ,

				    			servico_criar ,
				    			servico_editar ,
				    			servico_excluir ,
				    			servico_visualizar ,

				    			ordem_servico_criar ,
				    			ordem_servico_editar ,
				    			ordem_servico_excluir ,
				    			ordem_servico_visualizar ,

				    			relatorio_visualizar ,

				    			contas_receber_criar ,
				    			contas_receber_editar ,
				    			contas_receber_baixar ,
				    			contas_receber_cancelar ,
				    			contas_receber_estornar ,
				    			contas_receber_visualizar ,

				    			movimento_caixa_criar ,
				    			movimento_caixa_editar ,
				    			movimento_caixa_excluir ,
				    			movimento_caixa_visualizar ,

				    			empresa_editar ,
				    			empresa_visualizar ,

				    			email_editar ,
				    			email_visualizar ,

				    			usuario_criar ,
				    			usuario_editar ,
				    			usuario_excluir ,
				    			usuario_visualizar ,

				    			grupo_usuario_criar ,
				    			grupo_usuario_editar ,
				    			grupo_usuario_excluir ,
				    			grupo_usuario_visualizar 
		)

		VALUE (
								:nome, 
								:descricao ,

								:pessoa_criar ,
				    			:pessoa_editar ,
				    			:pessoa_excluir ,
				    			:pessoa_visualizar ,

				    			:tipo_colaborador_criar ,
				    			:tipo_colaborador_editar ,
				    			:tipo_colaborador_excluir ,
				    			:tipo_colaborador_visualizar ,

				    			:forma_pagamento_criar ,
				    			:forma_pagamento_editar ,
				    			:forma_pagamento_excluir ,
				    			:forma_pagamento_visualizar ,

				    			:servico_criar ,
				    			:servico_editar ,
				    			:servico_excluir ,
				    			:servico_visualizar ,

				    			:ordem_servico_criar ,
				    			:ordem_servico_editar ,
				    			:ordem_servico_excluir ,
				    			:ordem_servico_visualizar ,

				    			:relatorio_visualizar ,

				    			:contas_receber_criar ,
				    			:contas_receber_editar ,
				    			:contas_receber_baixar ,
				    			:contas_receber_cancelar ,
				    			:contas_receber_estornar ,
				    			:contas_receber_visualizar ,

				    			:movimento_caixa_criar ,
				    			:movimento_caixa_editar ,
				    			:movimento_caixa_excluir ,
				    			:movimento_caixa_visualizar ,

				    			:empresa_editar ,
				    			:empresa_visualizar ,

				    			:email_editar ,
				    			:email_visualizar ,

				    			:usuario_criar ,
				    			:usuario_editar ,
				    			:usuario_excluir ,
				    			:usuario_visualizar ,

				    			:grupo_usuario_criar ,
				    			:grupo_usuario_editar ,
				    			:grupo_usuario_excluir ,
				    			:grupo_usuario_visualizar 
								)";
		$result = null;

		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			$stmt->bindParam(":nome", $post['nome']);
			$stmt->bindParam(":descricao", $post['descricao']);
			$stmt->bindParam(":pessoa_criar", $post['pessoa_criar']);
			$stmt->bindParam(":pessoa_editar", $post['pessoa_editar']);
			$stmt->bindParam(":pessoa_excluir", $post['pessoa_excluir']);
			$stmt->bindParam(":pessoa_visualizar", $post['pessoa_visualizar']);
			$stmt->bindParam(":tipo_colaborador_criar", $post['tipo_colaborador_criar']);
			$stmt->bindParam(":tipo_colaborador_editar", $post['tipo_colaborador_editar']);
			$stmt->bindParam(":tipo_colaborador_excluir", $post['tipo_colaborador_excluir']);
			$stmt->bindParam(":tipo_colaborador_visualizar", $post['tipo_colaborador_visualizar']);
			$stmt->bindParam(":forma_pagamento_criar", $post['forma_pagamento_criar']);
			$stmt->bindParam(":forma_pagamento_editar", $post['forma_pagamento_editar']);
			$stmt->bindParam(":forma_pagamento_excluir", $post['forma_pagamento_excluir']);
			$stmt->bindParam(":forma_pagamento_visualizar", $post['forma_pagamento_visualizar']);
			$stmt->bindParam(":servico_criar", $post['servico_criar']);
			$stmt->bindParam(":servico_editar", $post['servico_editar']);
			$stmt->bindParam(":servico_excluir", $post['servico_excluir']);
			$stmt->bindParam(":servico_visualizar", $post['servico_visualizar']);
			$stmt->bindParam(":ordem_servico_criar", $post['ordem_servico_criar']);
			$stmt->bindParam(":ordem_servico_editar", $post['ordem_servico_editar']);
			$stmt->bindParam(":ordem_servico_excluir", $post['ordem_servico_excluir']);
			$stmt->bindParam(":ordem_servico_visualizar", $post['ordem_servico_visualizar']);
			$stmt->bindParam(":relatorio_visualizar", $post['relatorio_visualizar']);
			$stmt->bindParam(":contas_receber_criar", $post['contas_receber_criar']);
			$stmt->bindParam(":contas_receber_editar", $post['contas_receber_editar']);
			$stmt->bindParam(":contas_receber_baixar", $post['contas_receber_baixar']);
			$stmt->bindParam(":contas_receber_cancelar", $post['contas_receber_cancelar']);
			$stmt->bindParam(":contas_receber_estornar", $post['contas_receber_estornar']);
			$stmt->bindParam(":contas_receber_visualizar", $post['contas_receber_visualizar']);
			$stmt->bindParam(":movimento_caixa_criar", $post['movimento_caixa_criar']);
			$stmt->bindParam(":movimento_caixa_editar", $post['movimento_caixa_editar']);
			$stmt->bindParam(":movimento_caixa_excluir", $post['movimento_caixa_excluir']);
			$stmt->bindParam(":movimento_caixa_visualizar", $post['movimento_caixa_visualizar']);
			$stmt->bindParam(":empresa_editar", $post['empresa_editar']);
			$stmt->bindParam(":empresa_visualizar", $post['empresa_visualizar']);
			$stmt->bindParam(":email_editar", $post['email_editar']);
			$stmt->bindParam(":email_visualizar", $post['email_visualizar']);
			$stmt->bindParam(":usuario_criar", $post['usuario_criar']);
			$stmt->bindParam(":usuario_editar", $post['usuario_editar']);
			$stmt->bindParam(":usuario_excluir", $post['usuario_excluir']);
			$stmt->bindParam(":usuario_visualizar", $post['usuario_visualizar']);
			$stmt->bindParam(":grupo_usuario_criar", $post['grupo_usuario_criar']);
			$stmt->bindParam(":grupo_usuario_editar", $post['grupo_usuario_editar']);
			$stmt->bindParam(":grupo_usuario_excluir", $post['grupo_usuario_excluir']);
			$stmt->bindParam(":grupo_usuario_visualizar", $post['grupo_usuario_visualizar']);

			$result = $stmt->execute();
		} catch(PDOException $e){
			echo "Erro Insert: ".$e->getMessage();
		}
		return $result;
	}

	public function update(GrupoUsuario $gu)
	{
		$result = null;
		$sql = "UPDATE {$this->table} SET
						nome = :nome , 
						descricao = :descricao ,
						pessoa_criar = :pessoa_criar ,
		    			pessoa_editar = :pessoa_editar ,
		    			pessoa_excluir = :pessoa_excluir ,
		    			pessoa_visualizar = :pessoa_visualizar ,
		    			tipo_colaborador_criar = :tipo_colaborador_criar ,
		    			tipo_colaborador_editar = :tipo_colaborador_editar ,
		    			tipo_colaborador_excluir = :tipo_colaborador_excluir ,
		    			tipo_colaborador_visualizar = :tipo_colaborador_visualizar ,
		    			forma_pagamento_criar = :forma_pagamento_criar ,
		    			forma_pagamento_editar = :forma_pagamento_editar ,
		    			forma_pagamento_excluir = :forma_pagamento_excluir ,
		    			forma_pagamento_visualizar = :forma_pagamento_visualizar ,
		    			servico_criar = :servico_criar ,
		    			servico_editar = :servico_editar ,
		    			servico_excluir = :servico_excluir ,
		    			servico_visualizar = :servico_visualizar ,
		    			ordem_servico_criar = :ordem_servico_criar ,
		    			ordem_servico_editar = :ordem_servico_editar ,
		    			ordem_servico_excluir = :ordem_servico_excluir ,
		    			ordem_servico_visualizar = :ordem_servico_visualizar ,
		    			relatorio_visualizar = :relatorio_visualizar ,
		    			contas_receber_criar = :contas_receber_criar ,
		    			contas_receber_editar = :contas_receber_editar ,
		    			contas_receber_baixar = :contas_receber_baixar ,
		    			contas_receber_cancelar = :contas_receber_cancelar ,
		    			contas_receber_estornar = :contas_receber_estornar ,
		    			contas_receber_visualizar = :contas_receber_visualizar ,
		    			movimento_caixa_criar = :movimento_caixa_criar ,
		    			movimento_caixa_editar = :movimento_caixa_editar ,
		    			movimento_caixa_excluir = :movimento_caixa_excluir ,
		    			movimento_caixa_visualizar = :movimento_caixa_visualizar ,
		    			empresa_editar = :empresa_editar ,
		    			empresa_visualizar = :empresa_visualizar ,
		    			email_editar = :email_editar ,
		    			email_visualizar = :email_visualizar ,
		    			usuario_criar = :usuario_criar ,
		    			usuario_editar = :usuario_editar ,
		    			usuario_excluir = :usuario_excluir ,
		    			usuario_visualizar = :usuario_visualizar ,
		    			grupo_usuario_criar = :grupo_usuario_criar ,
		    			grupo_usuario_editar = :grupo_usuario_editar ,
		    			grupo_usuario_excluir = :grupo_usuario_excluir ,
		    			grupo_usuario_visualizar = :grupo_usuario_visualizar 
				WHERE id = :id;";

		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			$stmt->bindValue(":id", $gu->getId());
			$stmt->bindValue(":nome", $gu->getNome());
			$stmt->bindValue(":descricao", $gu->getDescricao());
			$stmt->bindValue(":pessoa_criar", $gu->getPessoaCriar());
			$stmt->bindValue(":pessoa_editar", $gu->getPessoaEditar());
			$stmt->bindValue(":pessoa_excluir", $gu->getPessoaExcluir());
			$stmt->bindValue(":pessoa_visualizar", $gu->getPessoaVisualizar());
			$stmt->bindValue(":tipo_colaborador_criar", $gu->getTipoColaboradorCriar());
			$stmt->bindValue(":tipo_colaborador_editar", $gu->getTipoColaboradorEditar());
			$stmt->bindValue(":tipo_colaborador_excluir", $gu->getTipoColaboradorExcluir());
			$stmt->bindValue(":tipo_colaborador_visualizar", $gu->getTipoColaboradorVisualizar());
			$stmt->bindValue(":forma_pagamento_criar", $gu->getFormaPagamentoCriar());
			$stmt->bindValue(":forma_pagamento_editar", $gu->getFormaPagamentoEditar());
			$stmt->bindValue(":forma_pagamento_excluir", $gu->getFormaPagamentoExcluir());
			$stmt->bindValue(":forma_pagamento_visualizar", $gu->getFormaPagamentoEVisualizar());
			$stmt->bindValue(":servico_criar", $gu->getServicoCriar());
			$stmt->bindValue(":servico_editar", $gu->getServicoEditar());
			$stmt->bindValue(":servico_excluir", $gu->getServicoExcluir());
			$stmt->bindValue(":servico_visualizar", $gu->getServicoVisualizar());
			$stmt->bindValue(":ordem_servico_criar", $gu->getOrdemServicoCriar());
			$stmt->bindValue(":ordem_servico_editar", $gu->getOrdemServicoEditar());
			$stmt->bindValue(":ordem_servico_excluir", $gu->getOrdemServicoExcluir());
			$stmt->bindValue(":ordem_servico_visualizar", $gu->getOrdemServicoVisualizar());
			$stmt->bindValue(":relatorio_visualizar", $gu->getRelatorioVisualizar());
			$stmt->bindValue(":contas_receber_criar", $gu->getContasReceberCriar());
			$stmt->bindValue(":contas_receber_editar", $gu->getContasReceberEditar());
			$stmt->bindValue(":contas_receber_baixar", $gu->getContasReceberBaixar());
			$stmt->bindValue(":contas_receber_cancelar", $gu->getContasReceberCancelar());
			$stmt->bindValue(":contas_receber_estornar", $gu->getContasReceberEstornar());
			$stmt->bindValue(":contas_receber_visualizar", $gu->getContasReceberVisualizar());
			$stmt->bindValue(":movimento_caixa_criar", $gu->getMovimentoCaixaCriar());
			$stmt->bindValue(":movimento_caixa_editar", $gu->getMovimentoCaixaEditar());
			$stmt->bindValue(":movimento_caixa_excluir", $gu->getMovimentoCaixaExcluir());
			$stmt->bindValue(":movimento_caixa_visualizar", $gu->getMovimentoCaixaVisualizar());
			$stmt->bindValue(":empresa_editar", $gu->getEmpresaEditar());
			$stmt->bindValue(":empresa_visualizar", $gu->getEmpresaVisualizar());
			$stmt->bindValue(":email_editar", $gu->getEmailEditar());
			$stmt->bindValue(":email_visualizar", $gu->getEmailVisualizar());
			$stmt->bindValue(":usuario_criar", $gu->getUsuarioCriar());
			$stmt->bindValue(":usuario_editar", $gu->getUsuarioEditar());
			$stmt->bindValue(":usuario_excluir", $gu->getUsuarioExcluir());
			$stmt->bindValue(":usuario_visualizar", $gu->getUsuarioVisualizar());
			$stmt->bindValue(":grupo_usuario_criar", $gu->getGrupoUsuarioCriar());
			$stmt->bindValue(":grupo_usuario_editar", $gu->getGrupoUsuarioEditar());
			$stmt->bindValue(":grupo_usuario_excluir", $gu->getGrupoUsuarioExcluir());
			$stmt->bindValue(":grupo_usuario_visualizar", $gu->getGrupoUsuarioVisualizar());

			$result = $stmt->execute();
		} catch(PDOException $e){
			echo "Erro Update: ".$e->getMessage();
		}
		return $result;
	}

	public function delete($id)
	{
		$result= null;
		$sql = "DELETE FROM {$this->table} WHERE id = :id";
		try {
			$conn = parent::getConnection();
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindValue(":id", $id);
			$result = $stmt->execute();
		} catch(PDOException $e){
			echo "Erro SelectId: ".$e->getMessage();
		}
		return $result;
	}
}