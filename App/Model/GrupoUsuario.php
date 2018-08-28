<?php 
namespace App\Model;

/**
 * 
 */
class GrupoUsuario {
	
	private $id;
	private $nome;
	private $descricao;
	private $pessoa_criar;
	private $pessoa_editar;
	private $pessoa_excluir;
	private $pessoa_visualizar;
	private $tipo_colaborador_criar;
	private $tipo_colaborador_editar;
	private $tipo_colaborador_excluir;
	private $tipo_colaborador_visualizar;
	private $forma_pagamento_criar;
	private $forma_pagamento_editar;
	private $forma_pagamento_excluir;
	private $forma_pagamento_visualizar;
	private $servico_criar;
	private $servico_editar;
	private $servico_excluir;
	private $servico_visualizar;
	private $ordem_servico_criar;
	private $ordem_servico_editar;
	private $ordem_servico_excluir;
	private $ordem_servico_visualizar;
	private $relatorio_visualizar;
	private $contas_receber_criar;
	private $contas_receber_editar;
	private $contas_receber_baixar;
	private $contas_receber_cancelar;
	private $contas_receber_estornar;
	private $contas_receber_visualizar;
	private $movimento_caixa_criar;
	private $movimento_caixa_editar;
	private $movimento_caixa_excluir;
	private $movimento_caixa_visualizar;
	private $empresa_editar;
	private $empresa_visualizar;
	private $email_editar;
	private $email_visualizar;
	private $usuario_criar;
	private $usuario_editar;
	private $usuario_excluir;
	private $usuario_visualizar;
	private $grupo_usuario_criar;
	private $grupo_usuario_editar;
	private $grupo_usuario_excluir;
	private $grupo_usuario_visualizar;

	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	
	public function getDescricao()
	{
		return $this->descricao;
	}
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}
	
	public function getPessoaCriar()
	{
		return $this->pessoa_criar;
	}
	public function setPessoaCriar($pessoa_criar)
	{
		$this->pessoa_criar = $pessoa_criar;
	}
	
	public function getPessoaEditar()
	{
		return $this->pessoa_editar;
	}
	public function setPessoaEditar($pessoa_editar)
	{
		$this->pessoa_editar = $pessoa_editar;
	}
	
	public function getPessoaExcluir()
	{
		return $this->pessoa_excluir;
	}
	public function setPessoaExcluir($pessoa_excluir)
	{
		$this->pessoa_excluir = $pessoa_excluir;
	}
	
	public function getPessoaVisualizar()
	{
		return $this->pessoa_visualizar;
	}
	public function setPessoaVisualizar($pessoa_visualizar)
	{
		$this->pessoa_visualizar = $pessoa_visualizar;
	}
	
	public function getTipoColaboradorCriar()
	{
		return $this->tipo_colaborador_criar;
	}
	public function setTipoColaboradorCriar($tipo_colaborador_criar)
	{
		$this->tipo_colaborador_criar = $tipo_colaborador_criar;
	}
	
	public function getTipoColaboradorEditar()
	{
		return $this->tipo_colaborador_editar;
	}
	public function setTipoColaboradorEditar($tipo_colaborador_editar)
	{
		$this->tipo_colaborador_editar = $tipo_colaborador_editar;
	}
	
	public function getTipoColaboradorExcluir()
	{
		return $this->tipo_colaborador_excluir;
	}
	public function setTipoColaboradorExcluir($tipo_colaborador_excluir)
	{
		$this->tipo_colaborador_excluir = $tipo_colaborador_excluir;
	}
	
	public function getTipoColaboradorVisualizar()
	{
		return $this->tipo_colaborador_visualizar;
	}
	public function setTipoColaboradorVisualizar($tipo_colaborador_visualizar)
	{
		$this->tipo_colaborador_visualizar = $tipo_colaborador_visualizar;
	}
	
	public function getFormaPagamentoCriar()
	{
		return $this->forma_pagamento_criar;
	}
	public function setFormaPagamentoCriar($forma_pagamento_criar)
	{
		$this->forma_pagamento_criar = $forma_pagamento_criar;
	}
	
	public function getFormaPagamentoEditar()
	{
		return $this->forma_pagamento_editar;
	}
	public function setFormaPagamentoEditar($forma_pagamento_editar)
	{
		$this->forma_pagamento_editar = $forma_pagamento_editar;
	}
	
	public function getFormaPagamentoExcluir()
	{
		return $this->forma_pagamento_excluir;
	}
	public function setFormaPagamentoExcluir($forma_pagamento_excluir)
	{
		$this->forma_pagamento_excluir = $forma_pagamento_excluir;
	}
	
	public function getFormaPagamentoEVisualizar()
	{
		return $this->forma_pagamento_visualizar;
	}
	public function setFormaPagamentoEVisualizar($forma_pagamento_visualizar)
	{
		$this->forma_pagamento_visualizar = $forma_pagamento_visualizar;
	}
	
	public function getServicoCriar()
	{
		return $this->servico_criar;
	}
	public function setServicoCriar($servico_criar)
	{
		$this->servico_criar = $servico_criar;
	}
	
	public function getServicoEditar()
	{
		return $this->servico_editar;
	}
	public function setServicoEditar($servico_editar)
	{
		$this->servico_editar = $servico_editar;
	}
	
	public function getServicoExcluir()
	{
		return $this->servico_excluir;
	}
	public function setServicoExcluir($servico_excluir)
	{
		$this->servico_excluir = $servico_excluir;
	}
	
	public function getServicoVisualizar()
	{
		return $this->servico_visualizar;
	}
	public function setServicoVisualizar($servico_visualizar)
	{
		$this->servico_visualizar = $servico_visualizar;
	}
	
	public function getOrdemServicoCriar()
	{
		return $this->ordem_servico_criar;
	}
	public function setOrdemServicoCriar($ordem_servico_criar)
	{
		$this->ordem_servico_criar = $ordem_servico_criar;
	}
	
	public function getOrdemServicoEditar()
	{
		return $this->ordem_servico_editar;
	}
	public function setOrdemServicoEditar($ordem_servico_editar)
	{
		$this->ordem_servico_editar = $ordem_servico_editar;
	}
	
	public function getOrdemServicoExcluir()
	{
		return $this->ordem_servico_excluir;
	}
	public function setOrdemServicoExcluir($ordem_servico_excluir)
	{
		$this->ordem_servico_excluir = $ordem_servico_excluir;
	}
	
	public function getOrdemServicoVisualizar()
	{
		return $this->ordem_servico_visualizar;
	}
	public function setOrdemServicoVisualizar($ordem_servico_visualizar)
	{
		$this->ordem_servico_visualizar = $ordem_servico_visualizar;
	}
	
	public function getRelatorioVisualizar()
	{
		return $this->relatorio_visualizar;
	}
	public function setRelatorioVisualizar($relatorio_visualizar)
	{
		$this->relatorio_visualizar = $relatorio_visualizar;
	}
	
	public function getContasReceberCriar()
	{
		return $this->contas_receber_criar;
	}
	public function setContasReceberCriar($contas_receber_criar)
	{
		$this->contas_receber_criar = $contas_receber_criar;
	}
	
	public function getContasReceberEditar()
	{
		return $this->contas_receber_editar;
	}
	public function setContasReceberEditar($contas_receber_editar)
	{
		$this->contas_receber_editar = $contas_receber_editar;
	}
	
	public function getContasReceberBaixar()
	{
		return $this->contas_receber_baixar;
	}
	public function setContasReceberBaixar($contas_receber_baixar)
	{
		$this->contas_receber_baixar = $contas_receber_baixar;
	}
	
	public function getContasReceberCancelar()
	{
		return $this->contas_receber_cancelar;
	}
	public function setContasReceberCancelar($contas_receber_cancelar)
	{
		$this->contas_receber_cancelar = $contas_receber_cancelar;
	}
	
	public function getContasReceberEstornar()
	{
		return $this->contas_receber_estornar;
	}
	public function setContasReceberEstornar($contas_receber_estornar)
	{
		$this->contas_receber_estornar = $contas_receber_estornar;
	}
	
	public function getContasReceberVisualizar()
	{
		return $this->contas_receber_visualizar;
	}
	public function setContasReceberVisualizar($contas_receber_visualizar)
	{
		$this->contas_receber_visualizar = $contas_receber_visualizar;
	}
	
	public function getMovimentoCaixaCriar()
	{
		return $this->movimento_caixa_criar;
	}
	public function setMovimentoCaixaCriar($movimento_caixa_criar)
	{
		$this->movimento_caixa_criar = $movimento_caixa_criar;
	}
	
	public function getMovimentoCaixaEditar()
	{
		return $this->movimento_caixa_editar;
	}
	public function setMovimentoCaixaEditar($movimento_caixa_editar)
	{
		$this->movimento_caixa_editar = $movimento_caixa_editar;
	}
	
	public function getMovimentoCaixaExcluir()
	{
		return $this->movimento_caixa_excluir;
	}
	public function setMovimentoCaixaExcluir($movimento_caixa_excluir)
	{
		$this->movimento_caixa_excluir = $movimento_caixa_excluir;
	}
	
	public function getMovimentoCaixaVisualizar()
	{
		return $this->movimento_caixa_visualizar;
	}
	public function setMovimentoCaixaVisualizar($movimento_caixa_visualizar)
	{
		$this->movimento_caixa_visualizar = $movimento_caixa_visualizar;
	}
	
	public function getEmpresaEditar()
	{
		return $this->empresa_editar;
	}
	public function setEmpresaEditar($empresa_editar)
	{
		$this->empresa_editar = $empresa_editar;
	}
	
	public function getEmpresaVisualizar()
	{
		return $this->empresa_visualizar;
	}
	public function setEmpresaVisualizar($empresa_visualizar)
	{
		$this->empresa_visualizar = $empresa_visualizar;
	}
	
	public function getEmailEditar()
	{
		return $this->email_editar;
	}
	public function setEmailEditar($email_editar)
	{
		$this->email_editar = $email_editar;
	}
	
	public function getEmailVisualizar()
	{
		return $this->email_visualizar;
	}
	public function setEmailVisualizar($email_visualizar)
	{
		$this->email_visualizar = $email_visualizar;
	}
	
	public function getUsuarioCriar()
	{
		return $this->usuario_criar;
	}
	public function setUsuarioCriar($usuario_criar)
	{
		$this->usuario_criar = $usuario_criar;
	}
	
	public function getUsuarioEditar()
	{
		return $this->usuario_editar;
	}
	public function setUsuarioEditar($usuario_editar)
	{
		$this->usuario_editar = $usuario_editar;
	}
	
	public function getUsuarioExcluir()
	{
		return $this->usuario_excluir;
	}
	public function setUsuarioExcluir($usuario_excluir)
	{
		$this->usuario_excluir = $usuario_excluir;
	}
	
	public function getUsuarioVisualizar()
	{
		return $this->usuario_visualizar;
	}
	public function setUsuarioVisualizar($usuario_visualizar)
	{
		$this->usuario_visualizar = $usuario_visualizar;
	}
	
	public function getGrupoUsuarioCriar()
	{
		return $this->grupo_usuario_criar;
	}
	public function setGrupoUsuarioCriar($grupo_usuario_criar)
	{
		$this->grupo_usuario_criar = $grupo_usuario_criar;
	}
	
	public function getGrupoUsuarioEditar()
	{
		return $this->grupo_usuario_editar;
	}
	public function setGrupoUsuarioEditar($grupo_usuario_editar)
	{
		$this->grupo_usuario_editar = $grupo_usuario_editar;
	}
	
	public function getGrupoUsuarioExcluir()
	{
		return $this->grupo_usuario_excluir;
	}
	public function setGrupoUsuarioExcluir($grupo_usuario_excluir)
	{
		$this->grupo_usuario_excluir = $grupo_usuario_excluir;
	}
	
	public function getGrupoUsuarioVisualizar()
	{
		return $this->grupo_usuario_visualizar;
	}
	public function setGrupoUsuarioVisualizar($grupo_usuario_visualizar)
	{
		$this->grupo_usuario_visualizar = $grupo_usuario_visualizar;
	}
	
}