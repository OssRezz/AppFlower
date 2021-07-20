<?php
require_once('../../Roles/Modelo/ModeloRoles.php');
require_once '../Modelo/ModeloProduccion.php';

$user = new Roles();
$Labor =  new Produccion();
$Produccion = new Produccion();
$date = date('Y-m-d');
$week = date('\S\e\m\a\n\a\ W, Y');



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
    <title>Produccion</title>
</head>

<body>

    <div class="container-fluid">
        <div id="respuesta"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2 bg-light mb-sm-4 mb-md-0">

                <div class="col" style="height: 20px;"></div>

                <div id="respuesta-menu"></div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-10 vh-100 border-left">


                <div class="row mb-3 border-bottom border-top">

                    <!-- Image and text -->
                    <nav class="navbar navbar-light w-100">
                        <div class="navbar-brand">
                            <img src="../../img/sunflower.svg" width="30" height="30" class="d-inline-block">
                            <i><small class="font-weight-bold text-muted">AppFlower user</small></i>
                            <?php echo $user->getUsername(); ?>
                            <input type="hidden" name="perfil" id="perfil" value="<?= $_SESSION['perfil'] ?>"></input>
                            <input type="hidden" name="perfil" id="limit" value="<?= $limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 10; ?>"></input>
                            <input type="hidden" name="perfil" id="pagina" value="<?= $pagina = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1; ?>"></input>
                        </div>
                        <button type="button" class="btn text-danger ml-auto" id="btn-logOut"><i class="fal fa-sign-out-alt fa-lg"></i></button>
                    </nav>

                </div>



                <div class="row">

                    <!--Primer tarjeta-->
                    <div class="col-sm-12  col-md-12 col-lg-12 col-xl-4 mb-3 mb-sm-3 mb-md-3 mb-lg-3 mb-xl-0 pr-lg-3 pr-xl-0">

                        <div class="card mb-3">
                            <div class="card-header text-primary"><i class="fas fa-plus-circle "></i> Formulario de
                                producción</div>

                            <div class="card-body">

                                <form>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="operario">Codigo</label>
                                            <input type="number" class="form-control" id="operario" name="operario" placeholder="Ingrese el codigo del operario">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="labor">Labor</label>
                                            <select name="labor" id="labor" class="form-control">
                                                <option disabled selected>Seleccione una labor</option>
                                                <?php
                                                $labor = $Labor->listarLaborProduccion();
                                                if ($labor != null) {
                                                    foreach ($labor as $labor) {
                                                ?>
                                                        <option value="<?php echo $labor['id_labor']  ?>"><?php echo $labor['labor']  ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="posicion">Posicion</label>
                                            <select class="form-control" name="posicion" id="posicion">
                                                <?php
                                                for ($i = 1; $i < 17; $i++) {
                                                ?>
                                                    <option value="<?php echo $i  ?>"><?php echo $i  ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="fecha">Fecha</label>
                                            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese su correo" name="trip-start" value="<?php echo $date; ?>">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="semana">Semana</label>
                                            <input type="week" class="form-control" name="semana" id="semana">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6" id="horasLabor">
                                            <label for="horas">Horas Trabajadas</label>
                                            <input type="number" class="form-control" id="hora" name="horas" placeholder="Tiempo laborado">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="tallos" id="tallosLabel">Tallos</label>
                                            <input type="number" class="form-control" id="tallos" name="tallos" placeholder="Tallos realizados">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="recetas" id="recetasLabel" style="display: none;">Recetas</label>
                                            <textarea class="form-control" name="recetas" id="recetas" rows="3" style="display: none;   resize: none;" placeholder="Ejm: 600+325+80+456"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-center">
                                        <input type="button" class="btn btn-outline-primary  col-sm-12 col-md-6" value="Ingresar" id="ingresar-produccion">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <!--Search Component-->
                        <div class="card">
                            <div class="searchBar text-primary">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Ingresa el codigo del operario">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!--Segunda tarjeta-->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">

                        <div class="card">
                            <div class="card-header border-bottom-0 text-primary"><i class="fas fa-th-list"></i>
                                Rendimientos registrados</div>
                            <div class="card-body p-0">

                                <table class="table border table-hover">
                                    <!--Trabajador-->
                                    <tr class="">
                                        <div id="accordion">
                                            <?php
                                            $paginationStart = ($pagina - 1) * $limit;
                                            $listProduccion = $Produccion->listaProduccionLimit($paginationStart, $limit);
                                            // $Usuarios = $usuario->listaUsuarios();
                                            if ($listProduccion != null) {
                                                foreach ($listProduccion as $listProduccion) {
                                            ?>

                                                    <!--collapseExampleOne es el id -->
                                                    <div class="">
                                                        <button class="btn btn-block d-flex align-items-center aligns p-0 border bg-light rounded-0 shadow-none px-2 text-dark" data-toggle="collapse" data-target="#collapse<?php echo $listProduccion['id_produccion'] ?>" aria-expanded="true" aria-controls="collapse<?php echo $listProduccion['id_produccion'] ?>">
                                                            <p class="m-2"><?php echo $listProduccion['nombre'] ?></p>
                                                        </button>
                                                    </div>
                                                    <div class="collapse border border-top-0 " id="collapse<?php echo $listProduccion['id_produccion'] ?>" data-parent="#accordion">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item py-0 d-flex justify-content-between">
                                                                <div class=""><b>Labor </b>: <?php echo $listProduccion['Labor'] ?></div>
                                                                <div class="text-center">
                                                                    <button class="btn btn-outline-primary pr-1 pl-1 py-0" id="btn-editar-usuario" value="<?php echo $listProduccion['id_produccion'] ?>">editar</button>
                                                                    <button class="btn btn-outline-danger pr-1 pl-1 py-0" id="btn-eliminar-usuario" value="<?php echo $listProduccion['id_produccion'] ?>"><i class="far fa-trash-alt" style="pointer-events: none;"></i></button>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item py-0"><b>Codigo </b>: <?php echo $listProduccion['operario'] ?></li>
                                                            <li class="list-group-item py-0"><b>Nombre </b>: <?php echo $listProduccion['nombre'] ?></li>
                                                            <li class="list-group-item py-0"><b>Fecha </b>: <?php echo $listProduccion['fecha'] ?></li>
                                                            <li class="list-group-item py-0"><b>Semana </b>: <?php echo $listProduccion['Semana'] ?></li>
                                                            <li class="list-group-item py-0"><b>Tiempo </b>: <?php echo $listProduccion['hora'] ?></li>
                                                            <li class="list-group-item py-0"><b>Tallos </b>: <?php echo $listProduccion['tallos'] ?></li>
                                                            <li class="list-group-item py-0"><b>Recetas </b>: <?php
                                                                                                                if ($listProduccion['labor'] != "1") {
                                                                                                                    echo "N/A";
                                                                                                                } else {
                                                                                                                    echo $listProduccion['recetas'];
                                                                                                                }
                                                                                                                ?></li>
                                                            <li class="list-group-item py-0"><b>Numero de recetas </b>: <?php
                                                                                                                        $recetas = $listProduccion['recetas'];
                                                                                                                        $Separador = str_replace("+", ',', $recetas);
                                                                                                                        $numeroRecetas = preg_split("/\,/", $Separador);
                                                                                                                        if ($listProduccion['labor'] != "1") {
                                                                                                                            echo "N/A";
                                                                                                                        } else {
                                                                                                                            echo count($numeroRecetas);
                                                                                                                        }
                                                                                                                        ?></li>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>

</html>