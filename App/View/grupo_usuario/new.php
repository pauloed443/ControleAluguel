<!DOCTYPE html>
<?php 
session_start();
$_SESSION['url'] = str_replace("/ControleAluguel/", "", $_SERVER["REQUEST_URI"]);
echo $_SESSION['url'];
 ?>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{ url('/') }}/imagens/favicon.ico" type="image/x-icon"/>

    <title>Controle Aluguel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
          rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet'
          type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>

<!--?php   
include('session.checkSession')
include('session.permissoes')

if(permissao("grupo_usuario_visualizar"))

    include('masks.fone')
    include('partials.navbar') ?-->

    <div class="container-fluid justify-content-center">
      <div class="container my-5">

            <div class="card">
            <form action="../../controller/GrupoUsuarioController.php" method="POST">

                    <div class="card-header">
                  <div class="row">
                    <div class="mr-auto ml-2"><h2>Novo Grupo de Usuário</h2></div>
                    <div class="mr-2"></div>
                  </div>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                              <label>Nome: *</label>
                              <input type="text" class="form-control" name="nome" placeholder="Nome do Grupo" required="">
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group">
                              <label>Descrição:</label>
                              <input type="text" class="form-control" name="descricao" placeholder="Descrição do Grupo">
                                </div>
                        </div>
                        </div>

                        <div class="row mt-3">

                        <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Pessoa:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="pessoa_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text ">
                                                            <input type="checkbox" name="pessoa_criar" value="1" aria-label="Criar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Criar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="pessoa_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="pessoa_excluir" value="1" aria-label="Excluir">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Excluir</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                        </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Forma Pagamento:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="forma_pagamento_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text ">
                                                            <input type="checkbox" name="forma_pagamento_criar" value="1" aria-label="Criar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Criar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="forma_pagamento_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="forma_pagamento_excluir" value="1" aria-label="Excluir">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Excluir</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Serviço:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="servico_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text ">
                                                            <input type="checkbox" name="servico_criar" value="1" aria-label="Criar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Criar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="servico_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="servico_excluir" value="1" aria-label="Excluir">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Excluir</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Ordem Serviço:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="ordem_servico_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text ">
                                                            <input type="checkbox" name="ordem_servico_criar" value="1" aria-label="Criar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Criar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="ordem_servico_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="ordem_servico_excluir" value="1" aria-label="Excluir">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Excluir</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Relatório:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="relatorio_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Contas Receber:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="contas_receber_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text ">
                                                            <input type="checkbox" name="contas_receber_criar" value="1" aria-label="Criar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Criar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="contas_receber_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="contas_receber_baixar" value="1" aria-label="Baixar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Baixar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="contas_receber_estornar" value="1" aria-label="Estornar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Estornar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="contas_receber_cancelar" value="1" aria-label="Cancelar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Cancelar</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Movimento Caixa:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="movimento_caixa_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text ">
                                                            <input type="checkbox" name="movimento_caixa_criar" value="1" aria-label="Criar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Criar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="movimento_caixa_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="movimento_caixa_excluir" value="1" aria-label="Excluir">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Excluir</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Empresa:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="empresa_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="empresa_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>E-mail:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="email_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="email_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Usuário:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="usuario_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text ">
                                                            <input type="checkbox" name="usuario_criar" value="1" aria-label="Criar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Criar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="usuario_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="usuario_excluir" value="1" aria-label="Excluir">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Excluir</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <h5>Grupo Usuário:</h5>
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light" >
                                            <tr>
                                                <th scope="row">
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" disabled="">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Permissões</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="grupo_usuario_visualizar" value="1" aria-label="visualizar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Visualizar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text ">
                                                            <input type="checkbox" name="grupo_usuario_criar" value="1" aria-label="Criar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Criar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="grupo_usuario_editar" value="1" aria-label="Editar">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Editar</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group-prepend justify-content-center">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="grupo_usuario_excluir" value="1" aria-label="Excluir">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="form-check-label">Excluir</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                      </div>

                      <div class=" p-2">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>

<!--?php
else 
exit()
@endif
 ?-->

</body>
</html>