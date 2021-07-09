<?php
require_once('../../Roles/Modelo/ModeloRoles.php');

$user = new Roles();

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
    <title>Produccion</title>
</head>

<body>

    <div class="container-fluid">
        <div id="respuesta"></div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-2 bg-light mb-sm-4 mb-md-0">

                <div class="col" style="height: 20px;"></div>

                <div id="respuesta-menu"></div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-10 vh-100 border-left">


                <div class="row mb-3 border-bottom border-top">

                    <!-- Image and text -->
                    <nav class="navbar navbar-light w-100">
                        <div class="navbar-brand">
                            <img src="img/sunflower.svg" width="30" height="30" class="d-inline-block">
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
                    <div
                        class="col-sm-12  col-md-12 col-lg-12 col-xl-4 mb-3 mb-sm-3 mb-md-3 mb-lg-3 mb-xl-0 pr-lg-3 pr-xl-0">

                        <div class="card mb-3">
                            <div class="card-header text-primary"><i class="fas fa-plus-circle "></i> Formulario de
                                producción</div>

                            <div class="card-body">

                                <form>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="codigo">Codigo</label>
                                            <input type="text" class="form-control" name="codigo"
                                                placeholder="Ingrese el codigo del operario">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="Labor">Labor</label>
                                            <select name="Labor" class="form-control">
                                                <option value="1" selected>Célula</option>
                                                <option value="1" >Máquina</option>
                                                <option value="1" >MáquinaTaT</option>
                                                <option value="1" >Preparaciónes</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="id_materia">Posicion</label>
                                            <select name="id_materia" class="form-control">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="2">3</option>
                                                <option value="2">4</option>
                                                <option value="2">5</option>
                                                <option value="2">6</option>
                                                <option value="2">7</option>
                                                <option value="2">8</option>
                                                <option value="2">9</option>
                                                <option value="2">10</option>
                                                <option value="2">11</option>
                                                <option value="2">12</option>
                                                <option value="2">13</option>
                                                <option value="2">14</option>
                                                <option value="2">15</option>
                                                <option value="2">16</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="correo">Fecha</label>
                                            <input type="date" class="form-control" name="correo"
                                                placeholder="Ingrese su correo" name="trip-start">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="cedula">Semana</label>
                                            <input type="week" class="form-control" name="cedula"
                                                placeholder="Ingrese su cedula">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="fecha">Horas Trabajadas</label>
                                            <input type="text" class="form-control" name="fecha">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="fecha">Tallos</label>
                                            <input type="text" class="form-control" name="fecha">
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
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">

                        <div class="card">
                            <div class="card-header border-bottom-0 text-primary"><i class="fas fa-th-list"></i>
                                Rendimientos registrados</div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">

                                        <tr>
                                            <th>Fecha</th>
                                            <th>Semana</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Labor</th>
                                            <th>Horas</th>
                                            <th>Tallos</th>
                                            <th>Promedio</th>
                                            <th>Acción</th>
                                        </tr>
                                        <tr>
                                            <td>06/11/2021</td>
                                            <td>Semana 28, 2021</td>
                                            <td>125478</td>
                                            <td>James Osorio Florez</td>
                                            <td>Celula-1</td>
                                            <td>6.5</td>
                                            <td>3674</td>
                                            <td>456</td>
                                            <td>
                                                <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                        class="fas fa-edit">editar</i></button>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>

</html>