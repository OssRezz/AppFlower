<?php
require_once('../../Roles/Modelo/ModeloRoles.php');
require_once('../Modelo/ModeloOperarios.php');


$user = new Roles();
$user->session();
$Operario = new Operarios();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Operarios</title>
</head>

<body>

    <div class="container-fluid">
        <div id="respuesta"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2 pb-2 bg-light mb-sm-4 mb-md-0">

                <div class="col" style="height: 20px;"></div>

                <div id="respuesta-menu"></div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-10 vh-100 border-left">


                <div class="row mb-3 border-bottom border-top">


                    <!-- Image and text -->
                    <nav class="navbar navbar-light w-100">
                        <div class="navbar-brand">
                            <img src="../../img/flower-pink.svg" width="30" height="30" class="d-inline-block">
                            <i><small class="font-weight-bold text-muted">AppFlower user</small></i>
                            <?php echo $user->getUsername(); ?>
                            <input type="hidden" name="perfil" id="perfil" value="<?=$_SESSION['perfil']?>"></input>
                            <input type="hidden" name="perfil" id="limit" value="<?= $limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 10; ?>"></input>
                            <input type="hidden" name="perfil" id="pagina" value="<?= $pagina = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1; ?>"></input>
                        </div>
                        <button type="button" class="btn text-danger ml-auto" id="btn-logOut"><i
                                class="fal fa-sign-out-alt fa-lg"></i></button>
                    </nav>


                </div>


                <div class="row">

                    <!--Primer tarjeta-->
                    <div class="col-sm-12  col-lg-12 col-xl-4   mb-3 mb-sm-3 mb-md-3 mb-lg-3 mb-xl-0 pr-md-3 pr-lg-3 pr-xl-0">

                        <div class="card mb-3">
                            <div class="card-header text-primary"><i class="fas fa-plus-circle "></i> Formulario de operarios</div>

                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="codigo">Codigo</label>
                                            <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Ingrese el codigo">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="correo">Nombre</label>
                                            <input  type="text" class="form-control" name="nombre"  id="nombre" placeholder="Ingrese el nombre">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="cedula">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese los apellidos">
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-center">
                                        <input type="button" class="btn btn-outline-primary  col-sm-12 col-md-6"
                                         id="btn-ingresar-operario"   value="Ingresar">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Search Component-->
                        <div class="card">
                            <div class="searchBar text-primary">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="BuscarOperario"
                                        placeholder="Ingresa el codigo del operario" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit" id="btn-buscar-operario">
                                            <i class="fa fa-search" style="pointer-events: none;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!--Segunda tarjeta-->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8  mb-3 mb-sm-3 mb-lg-0">

                    <div class="card">
                            <div class="card-header border-bottom-0 text-primary"><i class="fas fa-th-list"></i>
                                Usuarios registrados</div>
                            <div class="card-body p-0">


                                <table class="table border table-hover">
                                    <!--Trabajador-->
                                    <tr class="">
                                        <div id="accordion">
                                            <?php
                                            $paginationStart = ($pagina - 1) * $limit;
                                            $Operarios = $Operario->listaOperariosLimit($paginationStart, $limit);
                                            if ($Operarios != null) {
                                                foreach ($Operarios as $Operarios) {
                                            ?>

                                                    <!--collapseExampleOne es el id -->
                                                    <div class="">
                                                        <button class="btn btn-block d-flex align-items-center aligns p-0 border bg-light rounded-0 shadow-none px-2 text-dark" data-toggle="collapse" data-target="#collapse<?php echo $Operarios['contador'] ?>" aria-expanded="true" aria-controls="collapse<?php echo $Operarios['contador'] ?>">
                                                            <p class="m-2"><?php echo $Operarios['nombre'] ?></p>
                                                        </button>
                                                    </div>
                                                    <div class="collapse border border-top-0 " id="collapse<?php echo $Operarios['contador'] ?>" data-parent="#accordion">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item py-0 d-flex justify-content-between">
                                                                <div class=""><b>Nombre </b>: <?php echo $Operarios['nombre'] ?></div>
                                                                <div class="text-center">
                                                                    <button class="btn btn-outline-primary pr-1 pl-1 py-0" id="btn-editar-operario" value="<?php echo $Operarios['id_operario'] ?>">editar</button>
                                                                    <button class="btn btn-outline-danger pr-1 pl-1 py-0" id="btn-eliminar-operario" value="<?php echo $Operarios['id_operario'] ?>"><i class="far fa-trash-alt" style="pointer-events: none;"></i></button>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item py-0"><b>Codigo </b>: <?php echo $Operarios['id_operario'] ?></li>
                                                        </ul>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </tr>

                                </table>

                                <!-- Pagination -->
                                <div id="respuesta-paginacion"></div>
                                
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>

</html>