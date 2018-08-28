<?php
namespace App\Controller;

use App\Dao\GrupoUsuarioDao;
use App\Model\GrupoUsuario;

class GrupoUsuarioController {

	private $gud;
	private $gu;

	public function __construct() {
		//echo var_dump($this->gud);
		if (is_null($this->gud)) {
			$this->gud = new GrupoUsuarioDao();
			$this->gu = new GrupoUsuario();
		}
	}
	
	public function selectAll() {
		//echo var_dump($this->gud);
		return array('grupo_usuarios'=>$this->gud->selectAll());
	}

	public function selectId($id) {
		return array('grupo_usuario'=>$this->gud->selectId($id));
	}

	public function insert($dados) {
		//echo var_dump($this->gud);
		return $this->gud->insert($dados);
		//echo var_dump($dados);
	}

	public function update($dados) {

		$id = $dados['id']; 
		$nome = $dados['nome']; 
		$descricao = $dados['descricao']; 
		$pessoa_criar = '0'; 
		$pessoa_editar = '0'; 
		$pessoa_excluir = '0'; 
		$pessoa_visualizar = '0'; 
		$tipo_colaborador_criar = '0'; 
		$tipo_colaborador_editar = '0'; 
		$tipo_colaborador_excluir = '0'; 
		$tipo_colaborador_visualizar = '0'; 
		$forma_pagamento_criar = '0'; 
		$forma_pagamento_editar = '0'; 
		$forma_pagamento_excluir = '0'; 
		$forma_pagamento_visualizar = '0'; 
		$servico_criar = '0'; 
		$servico_editar = '0'; 
		$servico_excluir = '0'; 
		$servico_visualizar = '0'; 
		$ordem_servico_criar = '0'; 
		$ordem_servico_editar = '0'; 
		$ordem_servico_excluir = '0'; 
		$ordem_servico_visualizar = '0'; 
		$relatorio_visualizar = '0'; 
		$contas_receber_criar = '0'; 
		$contas_receber_editar = '0'; 
		$contas_receber_baixar = '0'; 
		$contas_receber_cancelar = '0'; 
		$contas_receber_estornar = '0'; 
		$contas_receber_visualizar = '0'; 
		$movimento_caixa_criar = '0'; 
		$movimento_caixa_editar = '0'; 
		$movimento_caixa_excluir = '0'; 
		$movimento_caixa_visualizar = '0'; 
		$empresa_editar = '0'; 
		$empresa_visualizar = '0'; 
		$email_editar = '0'; 
		$email_visualizar = '0'; 
		$usuario_criar = '0'; 
		$usuario_editar = '0'; 
		$usuario_excluir = '0'; 
		$usuario_visualizar = '0'; 
		$grupo_usuario_criar = '0'; 
		$grupo_usuario_editar = '0'; 
		$grupo_usuario_excluir = '0'; 
		$grupo_usuario_visualizar = '0'; 

		if (isset($dados['pessoa_criar'])){ 
			$pessoa_criar = $dados['pessoa_criar'];
		 }
		if (isset($dados['pessoa_editar'])){ 
			$pessoa_editar = $dados['pessoa_editar'];
		 }
		if (isset($dados['pessoa_excluir'])){ 
			$pessoa_excluir = $dados['pessoa_excluir'];
		 }
		if (isset($dados['pessoa_visualizar'])){ 
			$pessoa_visualizar = $dados['pessoa_visualizar'];
		 }
		if (isset($dados['tipo_colaborador_criar'])){ 
			$tipo_colaborador_criar = $dados['tipo_colaborador_criar'];
		 }
		if (isset($dados['tipo_colaborador_editar'])){ 
			$tipo_colaborador_editar = $dados['tipo_colaborador_editar'];
		 }
		if (isset($dados['tipo_colaborador_excluir'])){ 
			$tipo_colaborador_excluir = $dados['tipo_colaborador_excluir'];
		 }
		if (isset($dados['tipo_colaborador_visualizar'])){ 
			$tipo_colaborador_visualizar = $dados['tipo_colaborador_visualizar'];
		 }
		if (isset($dados['forma_pagamento_criar'])){ 
			$forma_pagamento_criar = $dados['forma_pagamento_criar'];
		 }
		if (isset($dados['forma_pagamento_editar'])){ 
			$forma_pagamento_editar = $dados['forma_pagamento_editar'];
		 }
		if (isset($dados['forma_pagamento_excluir'])){ 
			$forma_pagamento_excluir = $dados['forma_pagamento_excluir'];
		 }
		if (isset($dados['forma_pagamento_visualizar'])){ 
			$forma_pagamento_visualizar = $dados['forma_pagamento_visualizar'];
		 }
		if (isset($dados['servico_criar'])){ 
			$servico_criar = $dados['servico_criar'];
		 }
		if (isset($dados['servico_editar'])){ 
			$servico_editar = $dados['servico_editar'];
		 }
		if (isset($dados['servico_excluir'])){ 
			$servico_excluir = $dados['servico_excluir'];
		 }
		if (isset($dados['servico_visualizar'])){ 
			$servico_visualizar = $dados['servico_visualizar'];
		 }
		if (isset($dados['ordem_servico_criar'])){ 
			$ordem_servico_criar = $dados['ordem_servico_criar'];
		 }
		if (isset($dados['ordem_servico_editar'])){ 
			$ordem_servico_editar = $dados['ordem_servico_editar'];
		 }
		if (isset($dados['ordem_servico_excluir'])){ 
			$ordem_servico_excluir = $dados['ordem_servico_excluir'];
		 }
		if (isset($dados['ordem_servico_visualizar'])){ 
			$ordem_servico_visualizar = $dados['ordem_servico_visualizar'];
		 }
		if (isset($dados['relatorio_visualizar'])){ 
			$relatorio_visualizar = $dados['relatorio_visualizar'];
		 }
		if (isset($dados['contas_receber_criar'])){ 
			$contas_receber_criar = $dados['contas_receber_criar'];
		 }
		if (isset($dados['contas_receber_editar'])){ 
			$contas_receber_editar = $dados['contas_receber_editar'];
		 }
		if (isset($dados['contas_receber_baixar'])){ 
			$contas_receber_baixar = $dados['contas_receber_baixar'];
		 }
		if (isset($dados['contas_receber_cancelar'])){ 
			$contas_receber_cancelar = $dados['contas_receber_cancelar'];
		 }
		if (isset($dados['contas_receber_estornar'])){ 
			$contas_receber_estornar = $dados['contas_receber_estornar'];
		 }
		if (isset($dados['contas_receber_visualizar'])){ 
			$contas_receber_visualizar = $dados['contas_receber_visualizar'];
		 }
		if (isset($dados['movimento_caixa_criar'])){ 
			$movimento_caixa_criar = $dados['movimento_caixa_criar'];
		 }
		if (isset($dados['movimento_caixa_editar'])){ 
			$movimento_caixa_editar = $dados['movimento_caixa_editar'];
		 }
		if (isset($dados['movimento_caixa_excluir'])){ 
			$movimento_caixa_excluir = $dados['movimento_caixa_excluir'];
		 }
		if (isset($dados['movimento_caixa_visualizar'])){ 
			$movimento_caixa_visualizar = $dados['movimento_caixa_visualizar'];
		 }
		if (isset($dados['empresa_editar'])){ 
			$empresa_editar = $dados['empresa_editar'];
		 }
		if (isset($dados['empresa_visualizar'])){ 
			$empresa_visualizar = $dados['empresa_visualizar'];
		 }
		if (isset($dados['email_editar'])){ 
			$email_editar = $dados['email_editar'];
		 }
		if (isset($dados['email_visualizar'])){ 
			$email_visualizar = $dados['email_visualizar'];
		 }
		if (isset($dados['usuario_criar'])){ 
			$usuario_criar = $dados['usuario_criar'];
		 }
		if (isset($dados['usuario_editar'])){ 
			$usuario_editar = $dados['usuario_editar'];
		 }
		if (isset($dados['usuario_excluir'])){ 
			$usuario_excluir = $dados['usuario_excluir'];
		 }
		if (isset($dados['usuario_visualizar'])){ 
			$usuario_visualizar = $dados['usuario_visualizar'];
		 }
		if (isset($dados['grupo_usuario_criar'])){ 
			$grupo_usuario_criar = $dados['grupo_usuario_criar'];
		 }
		if (isset($dados['grupo_usuario_editar'])){ 
			$grupo_usuario_editar = $dados['grupo_usuario_editar'];
		 }
		if (isset($dados['grupo_usuario_excluir'])){ 
			$grupo_usuario_excluir = $dados['grupo_usuario_excluir'];
		 }
		if (isset($dados['grupo_usuario_visualizar'])){ 
			$grupo_usuario_visualizar = $dados['grupo_usuario_visualizar'];
		 }

		$this->gu->setId($id);
		$this->gu->setNome($nome);
		$this->gu->setDescricao($descricao);
		$this->gu->setPessoaCriar($pessoa_criar);
		$this->gu->setPessoaEditar($pessoa_editar);
		$this->gu->setPessoaExcluir($pessoa_excluir);
		$this->gu->setPessoaVisualizar($pessoa_visualizar);
		$this->gu->setTipoColaboradorCriar($tipo_colaborador_criar);
		$this->gu->setTipoColaboradorEditar($tipo_colaborador_editar);
		$this->gu->setTipoColaboradorExcluir($tipo_colaborador_excluir);
		$this->gu->setTipoColaboradorVisualizar($tipo_colaborador_visualizar);
		$this->gu->setFormaPagamentoCriar($forma_pagamento_criar);
		$this->gu->setFormaPagamentoEditar($forma_pagamento_editar);
		$this->gu->setFormaPagamentoExcluir($forma_pagamento_excluir);
		$this->gu->setFormaPagamentoEVisualizar($forma_pagamento_visualizar);
		$this->gu->setServicoCriar($servico_criar);
		$this->gu->setServicoEditar($servico_editar);
		$this->gu->setServicoExcluir($servico_excluir);
		$this->gu->setServicoVisualizar($servico_visualizar);
		$this->gu->setOrdemServicoCriar($ordem_servico_criar);
		$this->gu->setOrdemServicoEditar($ordem_servico_editar);
		$this->gu->setOrdemServicoExcluir($ordem_servico_excluir);
		$this->gu->setOrdemServicoVisualizar($ordem_servico_visualizar);
		$this->gu->setRelatorioVisualizar($relatorio_visualizar);
		$this->gu->setContasReceberCriar($contas_receber_criar);
		$this->gu->setContasReceberEditar($contas_receber_editar);
		$this->gu->setContasReceberBaixar($contas_receber_baixar);
		$this->gu->setContasReceberCancelar($contas_receber_cancelar);
		$this->gu->setContasReceberEstornar($contas_receber_estornar);
		$this->gu->setContasReceberVisualizar($contas_receber_visualizar);
		$this->gu->setMovimentoCaixaCriar($movimento_caixa_criar);
		$this->gu->setMovimentoCaixaEditar($movimento_caixa_editar);
		$this->gu->setMovimentoCaixaExcluir($movimento_caixa_excluir);
		$this->gu->setMovimentoCaixaVisualizar($movimento_caixa_visualizar);
		$this->gu->setEmpresaEditar($empresa_editar);
		$this->gu->setEmpresaVisualizar($empresa_visualizar);
		$this->gu->setEmailEditar($email_editar);
		$this->gu->setEmailVisualizar($email_visualizar);
		$this->gu->setUsuarioCriar($usuario_criar);
		$this->gu->setUsuarioEditar($usuario_editar);
		$this->gu->setUsuarioExcluir($usuario_excluir);
		$this->gu->setUsuarioVisualizar($usuario_visualizar);
		$this->gu->setGrupoUsuarioCriar($grupo_usuario_criar);
		$this->gu->setGrupoUsuarioEditar($grupo_usuario_editar);
		$this->gu->setGrupoUsuarioExcluir($grupo_usuario_excluir);
		$this->gu->setGrupoUsuarioVisualizar($grupo_usuario_visualizar);

		return $this->gud->update($this->gu);
	}

	public function remove($id)
	{
		echo $id;
		if (isset($id)) {
			return $this->gud->delete($id);
		} else {
			return NULL;
		}
	}

}
