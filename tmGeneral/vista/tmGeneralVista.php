<?php
require_once('../../Roles/Modelo/ModeloRoles.php');
require '../Modelo/ModeloTmGeneral.php';
$TmGeneral = new tmGeneral();
$user = new Roles();

$date = date('Y-m-d');
$semana = date('Y\-\WW');
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="shortcut icon" href="../../img/isabelitaLogo.jpg">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Tiempo General</title>
</head>

<body>

    <div class="container-fluid">
        <div id="respuesta"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2 pb-2 bg-light mb-sm-4 mb-md-0 lateralMenu">

                <div class="col" style="height: 20px;"></div>

                <div id="respuesta-menu"></div>

            </div>

            <div class="col vh-100 border-left">


                <div class="row mb-3 border-bottom border-top">

                    <!-- Image and text -->
                    <nav class="navbar navbar-light w-100 pl-1">
                        <div class="navbar-brand">
                            <button type="button" id="hamburguer-menu" class="btn text-dark"><i class="far fa-bars fa-lg"></i></button>
                            <?php echo $user->getUsername(); ?>
                            <input type="hidden" name="perfil" id="perfil" value="<?= $_SESSION['perfil'] ?>"></input>
                            <input type="hidden" id="limit" value="<?= $limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 10; ?>"></input>
                            <input type="hidden" id="pagina" value="<?= $pagina = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1; ?>"></input>
                        </div>
                        <button type="button" class="btn text-danger ml-auto" id="btn-logOut"><i class="fal fa-sign-out-alt fa-lg"></i></button>
                    </nav>

                </div>



                <div class="row">

                    <!--Primer tarjeta-->
                    <div class="col-sm-12  col-md-12 col-lg-12 col-xl-4 mb-3 mb-sm-3 mb-md-3 mb-lg-3 mb-xl-0 pr-lg-3 pr-xl-0">

                        <!--Search Component-->
                        <div class="card mb-3">
                            <div class="searchBar text-primary">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="BuscartmGeneral" placeholder="Ingresa el codigo del operario" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit" id="btn-buscar-tmGeneral">
                                            <i class="fa fa-search" style="pointer-events: none;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header text-primary"><i class="fas fa-plus-circle "></i> Formulario de
                                tiempo muerto general</div>

                            <div class="card-body">

                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12">
                                            <label for="operario">Codigo</label>
                                            <input type="text" class="form-control" name="operario" id="operario" placeholder="Ingrese el codigo del operario">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="fecha">Fecha</label>
                                            <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $date ?>">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="semana">Semana</label>
                                            <input type="week" class="form-control" name="semana" id="semana" value="<?php echo $semana ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12">
                                            <label for="labor">Labor</label>
                                            <select name="labor" class="form-control" id="labor">
                                                <?php
                                                $laborEmpaque = $TmGeneral->listarLabor();
                                                if ($laborEmpaque != null) {
                                                    foreach ($laborEmpaque as $laborEmpaque) {
                                                ?>
                                                        <option value="<?php echo $laborEmpaque['id_labor']; ?>"><?php echo $laborEmpaque['labor']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12">
                                            <label for="causa">Causa</label>
                                            <select name="causa" class="form-control" id="causa">
                                                <?php
                                                $causaGeneral = $TmGeneral->listarCausa();
                                                if ($causaGeneral != null) {
                                                    foreach ($causaGeneral as $causaGeneral) {
                                                ?>
                                                        <option value="<?php echo $causaGeneral['id_causa']; ?>"><?php echo $causaGeneral['causa']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12">
                                            <label for="tiempo">Tiempo</label>
                                            <input type="number" class="form-control" id="tiempo" placeholder="Tiempo muerto del operario">
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-center">
                                        <input type="button" class="btn btn-outline-primary  col-sm-12 col-md-6" value="Ingresar" id="btn-ingresar-tmGeneral">
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>


                    <!--Segunda tarjeta-->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">

                        <div class="card">
                            <div class="card-header border-bottom-0 text-primary"><i class="fas fa-th-list"></i>
                                Tiempos muertos registrados</div>
                            <div class="card-body p-0">

                                <table class="table border  table-hover">
                                    <!--Trabajador-->
                                    <tr class="">
                                        <div id="accordion">
                                            <?php
                                            $paginationStart = ($pagina - 1) * $limit;
                                            $tmGeneral = $TmGeneral->listatmGeneralLimit($paginationStart, $limit);
                                            if ($tmGeneral != null) {
                                                foreach ($tmGeneral as $tmGeneral) {
                                            ?>

                                                    <!--collapseExampleOne es el id -->
                                                    <div class="">
                                                        <button class="btn btn-block  p-0 border bg-light rounded-0 shadow-none px-2 text-dark" data-toggle="collapse" data-target="#collapse<?php echo $tmGeneral['id_general'] ?>" aria-expanded="true" aria-controls="collapse<?php echo $tmGeneral['id_general'] ?>">
                                                            <div class='row text-center'>
                                                                <div class='col-8 d-flex justify-content-start'>
                                                                    <div class='m-2'><i class='fas fa-stopwatch text-muted pr-1'></i> <?php echo $tmGeneral['nombre'] ?></div>
                                                                </div>
                                                                <div class='col d-flex justify-content-end'>
                                                                    <div class="m-2 mr-4"><small><span class="badge badge-secondary" style="width: 45px;"><?php echo $tmGeneral['tiempo'] ?></span></small></div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="collapse border border-top-0 " id="collapse<?php echo $tmGeneral['id_general'] ?>" data-parent="#accordion">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item lp d-flex justify-content-between">
                                                                <div class=""><b>Labor </b>: <?php echo $tmGeneral['nombreLabor'] ?></div>
                                                                <div class="text-center">
                                                                    <button class="btn  btn-sm  btn-outline-primary border-0" id="btn-editar-tmGeneral" value="<?php echo $tmGeneral['id_general'] ?>">Editar</button>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item lp"><b>Codigo </b>: <?php echo $tmGeneral['operario'] ?></li>
                                                            <li class="list-group-item lp"><b>Nombre </b>: <?php echo $tmGeneral['nombre'] ?></li>
                                                            <li class="list-group-item lp"><b>Fecha </b>: <?php echo $tmGeneral['fecha'] ?></li>
                                                            <li class="list-group-item lp"><b>Semana </b>: <?php echo $tmGeneral['Semana'] ?></li>
                                                            <li class="list-group-item lp"><b>Tiempo </b>: <?php echo $tmGeneral['tiempo'] ?></li>
                                                            <li class="list-group-item lp"><b>Causa </b>: <?php echo $tmGeneral['nombreCausa'] ?></li>
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
                                <div class="col d-flex justify-content-end" id="respuesta-paginacion"></div>


                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="../app/script.js"></script>
</body>

</html>