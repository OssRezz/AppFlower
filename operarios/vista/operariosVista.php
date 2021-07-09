<?php
require_once('../../Roles/Modelo/ModeloRoles.php');

$user = new Roles();
$user->session();
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
    <title>Operarios</title>
</head>

<body>

    <div class="container-fluid">
        <div id="respuesta"></div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-2 pb-2 bg-light mb-sm-4 mb-md-0">

                <div class="col" style="height: 20px;"></div>

                <div id="respuesta-menu"></div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-10 vh-100 border-left">


                <div class="row mb-3 border-bottom border-top">


                    <!-- Image and text -->
                    <nav class="navbar navbar-light w-100">
                        <div class="navbar-brand">
                            <img src="img/flower-pink.svg" width="30" height="30" class="d-inline-block">
                            <i><small class="font-weight-bold text-muted">AppFlower user</small></i>
                            <?php echo $user->getUsername(); ?>
                            <input type="hidden" name="perfil" id="perfil" value="<?=$_SESSION['perfil']?>"></input>
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
                                <form action="../Controladores/insertAdmin.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="codigo">Codigo</label>
                                            <input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="correo">Nombre</label>
                                            <input  type="text" class="form-control" name="correo" placeholder="Ingrese el nombre">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="cedula">Apellidos</label>
                                            <input type="text" class="form-control" name="cedula" placeholder="Ingrese los apellidos">
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-center">
                                        <input type="submit" class="btn btn-outline-primary  col-sm-12 col-md-6"
                                            value="Ingresar">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Search Component-->
                        <div class="card">
                            <div class="searchBar text-primary">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        placeholder="Ingresa el codigo del operario">
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
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8  mb-3 mb-sm-3 mb-lg-0">

                        <div class="card">
                            <div class="card-header border-bottom-0 text-primary"><i class="fas fa-th-list"></i> Operarios registrados</div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                        <tr>
                                            <td>1036957215</td>
                                            <td>James Osorio Florez</td>
                                            <td>
                                                <button type="button" class="btn text-primary btn-sm shadow-none"><i class="fas fa-edit">editar</i></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Siguiente</a>
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