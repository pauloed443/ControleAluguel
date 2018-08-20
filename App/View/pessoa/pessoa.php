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

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>

<!--?php   
include('session.checkSession')
include('session.permissoes')

if(permissao("pessoa_visualizar"))

    include('masks.fone')
    include('partials.navbar') ?-->

    <div class="container-fluid">
        <div class="container my-5">

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="mr-auto ml-2">
                            <h2>Pessoas</h2>
                        </div>
                        <?php //if(permissao("pessoa_criar")) ?> 
                        <form action="pessoa/new/">
                            <div class="mr-2">
                                <button type="submit" class="btn btn-primary">+ Novo</button>
                            </div>
                        </form>
                        <!--@endif-->
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{url('pessoa/search')}}" method="GET">
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
                                    <th scope="col">Telefone</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Dt. Aniver.</th>
                                    <th scope="text-center">Operações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    define("DS", DIRECTORY_SEPARATOR);
                                    require_once __DIR__ . DS . '..'.DS.'..'.DS.'..'.DS.'vendor' .DS. 'autoload.php';

                                    $pessoaController = new \App\Controller\PessoaController;
                                    $array = $pessoaController::selectAll();
                                    if(count($array["pessoas"]) > 0){
                                        foreach ($array["pessoas"] as $value){ ?>
                                            <tr>
                                                <td scope="row"><?=$value["Id"]?></td>
                                                <td><?=$value["Nome"]?></td>
                                                <td> contato
                                                </td>
                                                <td><?=$value["Email"]?></td>
                                                <td><?php echo date('d/m/Y', strtotime($value["dataNascimento"])); ?></td>
                                                <td class="row">
                                                    <a href="<?=$value["Id"]?>">
                                                        <span class="btn btn-primary btn-sm">
                                                            <span class="fa fa-edit"> Editar</span>
                                                        </span>
                                                    </a>
                                                    <a href="<?=$value["Id"]?>">
                                                        <span class="btn btn-danger btn-sm">
                                                            <span class="fa fa-remove"> Excluir</span>
                                                        </span>
                                                    </a>
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
                                    <?=$total=count($array["pessoas"])?>
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

</body>
</html>