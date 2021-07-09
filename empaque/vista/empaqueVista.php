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
    <link rel="stylesheet" href="css/style.css">
    <script src="app.js"></script>
    <title>Empaque</title>
</head>

<body>

    <div class="container-fluid">
        <div id="respuesta"></div>
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2 pb-2 bg-light mb-sm-4 mb-md-0 rounded-bottom">

                <div class="col" style="height: 20px;"></div>
                
                <div id="respuesta-menu"></div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-10 vh-100 border-left">


                <div class="row mb-3 border-bottom border-top">

                    <!-- Image and text -->
                    <nav class="navbar navbar-light w-100">
                        <div class="navbar-brand">
                            <img src="img/flower-empaque.svg" width="30" height="30" class="d-inline-block">
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
                                empaque</div>

                            <div class="card-body">

                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="Labor">Posicion</label>
                                            <select name="Labor" class="form-control">
                                                <option value="1" selected>Celula-1</option>
                                                <option value="2">Celula-2</option>
                                                <option value="3">Celula-3</option>
                                                <option value="4">Celula-4</option>
                                                <option value="4">PostCosecha</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="Labor">Labor</label>
                                            <select name="Labor" class="form-control">
                                                <option value="1" selected>Surtidor</option>
                                                <option value="1">Empaque</option>
                                                <option value="1">Zunchador</option>
                                                <option value="1">Etiqueta</option>
                                                <option value="1">PostCosecha</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12">
                                            <label for="fecha">Codigo</label>
                                            <input type="text" class="form-control" name="fecha"
                                                placeholder="Ingrese el codigo del operario">
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
                                            <input type="week" class="form-control" name="cedula">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="fecha">Horas Trabajadas</label>
                                            <input type="text" class="form-control" name="fecha"
                                                placeholder="Tiempo laborado">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="fecha">Cajas</label>
                                            <input type="text" class="form-control" name="fecha"
                                                placeholder="Cantidad del operario">
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
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 mb-3">

                        <div class="card">
                            <div class="card-header border-bottom-0 text-primary"><i class="fas fa-th-list"></i>
                                Rendimientos registrados</div>
                            <div class="card-body p-0">

                                <div class="table-responsive">
                                    <table class="table  table-sm table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Semana</th>
                                                <th>Posicion</th>
                                                <th>Labor</th>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>Horas</th>
                                                <th>Fulles</th>
                                                <th>Promedio</th>
                                                <th>Accón</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06/11/2021</td>
                                                <td>Semana 28, 2021</td>
                                                <td>Celula-1</td>
                                                <td>Empaque</td>
                                                <td>254789</td>
                                                <td>James Osorio Florez</td>
                                                <td>6.5</td>
                                                <td>300</td>
                                                <td>102</td>
                                                <td>
                                                    <button type="button" class="btn text-primary btn-sm shadow-none"><i
                                                            class="fas fa-edit">editar</i></button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
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