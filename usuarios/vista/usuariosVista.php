<?php
require_once('../../roles/Modelo/ModeloRoles.php');
require '../Modelo/ModeloUsuarios.php';

$user = new Roles();
$usuario =  new Usuarios();
$user->session();

//Setemoas el limite de paginas que tiene la tabla
$limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 10;
//Para conocer en que paginas estamos, Si no hay ninguno le decimos que es 1
$page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
//funcion para contar usuarios
$Usuarios = $usuario->contadorUsuarios();

$allRecords = $Usuarios[0]['correo'];
$totalpaginas = ceil(round($allRecords / $limit));
$paginationStart = ($page - 1) * $limit;
$prev = $page - 1;
$next = $page + 1;
$Users = $usuario->listaUsuariosLimit($paginationStart, $limit);

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
    <link rel="stylesheet" href="css/style.css">
    <title>Usuarios</title>
</head>

<body>

    <div class="container-fluid">
        <div id="respuesta"></div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-2 pb-2 bg-light mb-sm-4 mb-md-0">

                <div class="col" style="height: 20px;"></div>

                <div id="respuesta-menu"></div>

            </div>

            <div class="col vh-100 border-left">

                <div class="row mb-3 border-bottom border-top">

                    <!-- Image and text -->
                    <nav class="navbar navbar-light w-100">
                        <div class="navbar-brand">
                            <img src="../../img/flower-yellow.svg" width="30" height="30" class="d-inline-block">
                            <i><small class="font-weight-bold text-muted">App user</small></i>
                            <?php echo $user->getUsername(); ?>
                            <input type="hidden" name="perfil" id="perfil" value="<?= $_SESSION['perfil'] ?>"></input>
                        </div>
                        <button type="button" class="btn text-danger ml-auto" id="btn-logOut"><i class="fal fa-sign-out-alt fa-lg"></i></button>
                    </nav>

                </div>


                <div class="row">

                    <!--Primer tarjeta-->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mb-3 mb-sm-3 mb-md-3 mb-lg-12 mb-xl-0 pr-md-3 pr-lg-3 pr-xl-0">


                        <div class="card">
                            <div class="card-header text-primary"><i class="fas fa-plus-circle "></i> Formulario de
                                usuarios</div>
                            <div class="card-body">

                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="correo">Correo</label>
                                            <input type="email" class="form-control" id="correo" placeholder="Ingrese el correo">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="apellido">Apellido</label>
                                            <input type="text" class="form-control" id="apellido" placeholder="Ingrese los apellidos">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="password">Contraseña</label>
                                            <input type="password" class="form-control" id="password" placeholder="*************">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="perfil">Perfil</label>
                                            <select class="form-control" id="perfil_user">
                                                <?php
                                                $perfil = $user->listaPerfil();
                                                if ($perfil != null) {
                                                    foreach ($perfil as $perfil) {
                                                ?>
                                                        <option value="<?php echo $perfil['id_perfil'] ?>"><?php echo $perfil['perfil'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-center">
                                        <input type="button" class="btn btn-outline-primary  col-sm-12 col-md-6" id="btn-insertUser" value="Ingresar">
                                    </div>
                                </form>

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

                                            // $Usuarios = $usuario->listaUsuarios();
                                            if ($Users != null) {
                                                foreach ($Users as $Users) {
                                            ?>

                                                    <!--collapseExampleOne es el id -->
                                                    <div class="">
                                                        <button class="btn btn-block d-flex align-items-center aligns p-0 border bg-light rounded-0 shadow-none px-2 text-dark" data-toggle="collapse" data-target="#collapse<?php echo $Users['contador'] ?>" aria-expanded="true" aria-controls="collapse<?php echo $Users['contador'] ?>">
                                                            <p class="m-2"><?php echo $Users['nombre'] ?></p>
                                                        </button>
                                                    </div>
                                                    <div class="collapse border border-top-0 " id="collapse<?php echo $Users['contador'] ?>" data-parent="#accordion">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item py-0 d-flex justify-content-between">
                                                                <div class=""><b>Nombre </b>: <?php echo $Users['nombre'] ?></div>
                                                                <div class="">
                                                                    <a href="" class="pr-3"><i class="far fa-edit "></i></a>
                                                                    <a href="" class=""><i class="far fa-trash-alt " style="color: red;"></i></a>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item py-0"><b>Correo </b>: <?php echo $Users['correo'] ?></li>
                                                            <li class="list-group-item py-0"><b>Contraseña </b>: <?php echo $Users['password'] ?></li>
                                                            <li class="list-group-item py-0"><b>Perfil </b>: <?php echo $Users['tipoPerfil'] ?></li>
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
                                <nav aria-label="Page navigation example mt-5">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item <?php if ($page <= 1) {echo 'disabled';} ?>">
                                            <a class="page-link" href="<?php if ($page <= 1) {echo '#'; } else { echo "?page=" . $prev; } ?>">Previous</a>
                                        </li>

                                        <?php for ($i = 1; $i <= $totalpaginas; $i++) : ?>
                                            <li class="page-item <?php if ($page == $i) {echo 'active'; } ?>">
                                                <a class="page-link" href="usuariosVista.php?page=<?= $i; ?>"> <?= $i; ?> </a>
                                            </li>
                                        <?php endfor; ?>

                                        <li class="page-item <?php if ($page >= $totalpaginas) { echo 'disabled';} ?>">
                                            <a class="page-link" href="<?php if ($page >= $totalpaginas) {echo '#';} else { echo "?page=" . $next; } ?>">Next</a>
                                        </li>
                                    </ul>
                                </nav>
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