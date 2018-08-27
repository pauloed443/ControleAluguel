<!DOCTYPE html>
<?php 
session_start();
$_SESSION['url'] = str_replace("/ControleAluguel/", "", $_SERVER["REQUEST_URI"]);
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

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

    <div class="container-fluid">
        <div class="container my-5">

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="mr-auto ml-2">
                            <h2>Grupo de Usuario</h2>
                        </div>
                        <?php //if(permissao("grupo_usuario_criar")) ?> 
                            <div class="mr-2">
                                <a href="new.php"><button class="btn btn-primary">+ Novo</button></a>
                            </div>
                        <!--@endif-->
                    </div>
                </div>

                <div class="card-body">
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <select name="paramentro" class="form-control">
                                        <option value="Id" required="">#</option>
                                        <option value="Nome" required="" selected="">Nome</option>
                                        <option value="Email" required="">E-mail</option>
                                        <option value="dataNascimento" required="">Data Nascimento</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="pesquisa" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mr-sm-3">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-search"> Pesquisar</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="text-center">Operações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    define("DS", DIRECTORY_SEPARATOR);
                                    require_once __DIR__.DS .'..'.DS.'..'.DS.'..'.DS.'vendor'.DS.'autoload.php';

                                    //require_once '../../controller/GrupoUsuarioController.php';
                                    $grupoUsuarioController = new \App\Controller\GrupoUsuarioController();
                                    $array = $grupoUsuarioController->selectAll();
                                    if(count($array["grupo_usuarios"]) > 0){
                                        foreach ($array["grupo_usuarios"] as $value){ 
                                ?>
                                            <tr>
                                                <td scope="row"><?=$value["id"]?></td>
                                                <td><?=$value["nome"]?></td>
                                                <td><?=$value["descricao"]?></td>
                                                <td class="row">
                                                    <form action="edit.php">
                                                        <input type="hidden" name="id" value="<?=$value['id']?>">
                                                        <button class="btn btn-primary btn-sm" onclick="">
                                                            <span class="fa fa-edit"> Editar</span>
                                                        </button>
                                                    </form>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" onclick="showModal()">
                                                            <span class="fa fa-remove"> Excluir</span>
                                                        </button>
                                                    <!-- Modal -->
                                                    <form action="toedit.php" method="POST">
                                                        <input type="hidden" name="id" value="<?=$value['id']?>">
                                                        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                Deseja excluir o registro?
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                                                <button type="submit" class="btn btn-primary">Sim</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php 
                                        }
                                    } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                                
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Total =
                                <span class="badge badge-primary badge-pill">
                                    <?=count($array["grupo_usuarios"])?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!--?php
else 
exit()
@endif
 ?-->

 <script type="text/javascript">
     function showModal() {
         $('#modalDelete').modal('show');
     }
 </script>

</body>
</html>