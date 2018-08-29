<?php 
define("DS", DIRECTORY_SEPARATOR);
require_once __DIR__.DS .'..'.DS.'..'.DS.'..'.DS.'vendor'.DS.'autoload.php';

session_start();
$_SESSION['url'] = str_replace("/ControleAluguel/", "", $_SERVER["REQUEST_URI"]);

$usuarioController = new \App\Controller\UsuarioController;
$u = $usuarioController->selectId($_GET['Id']);

$grupoUsuarioController = new \App\Controller\GrupoUsuarioController;
$gpu = $grupoUsuarioController->selectAll();
 ?>

 <!DOCTYPE html>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>

<!--  @include('session.checkSession')
    @include('session.permissoes')

@if(permissao("usuario_editar"))

    @include('partials.navbar')-->
    
    <div class="container-fluid justify-content-center">
      <div class="container my-5">

            <div class="card">
            <form action="toedit.php" method="POST">

                    <div class="card-header">
                  <div class="row d-flex mx-1">
                    <div class="mr-auto p-2"><h2>Atualizar Usuário</h2></div>
                    <div class=" p-2"></div>
                  </div>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-4">
                          <input type="hidden" name="id" value="<?=$u['usuario']['Id']?>">
                                <div class="form-group">
                              <label>Login: *</label>
                              <input type="text" class="form-control" name="login" placeholder="Login" value="<?=$u['usuario']['Login']?>" required="">
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="form-group">
                              <label>Nome: *</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?=$u['usuario']['Nome']?>" required="">
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="form-group">
                              <label>E-mail: *</label>
                              <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?=$u['usuario']['Email']?>" required="">
                                </div>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <label>Grupo Usuário:</label>
                                <select name="idGrupoUsuario" class="form-control">
                                    <option value=''></option>
                                    <?php
                                    if (count($gpu['grupo_usuarios']) > 0):
                                        foreach ($gpu['grupo_usuarios'] as $value):
                                    ?>
                                            <option value="<?=$value['id']?>" <?php if ($value['id'] == $u['usuario']['idGrupoUsuario']): echo "selected"; endif ?>><?=$value['nome']?></option>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </select>
                            </div>
                      </div>

                      <div class=" p-2">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>

<!--@else
    <?php exit(); ?>
@endif-->

</body>
</html>