<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src=""></script>
    <title>Index Admin</title>
</head>

<body>

    <div class="container-fluid">
        <div id="respuesta"></div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-2 pb-2 bg-light mb-sm-4 mb-md-0">

                <div class="col" style="height: 20px;"></div>

                <a href="#" class="btn btn-block btn-dark  mb-2 text-left"><i class="fas fa-home  pr-2"></i> App
                    Flower</a>
                <a href="Usuarios.html" class="btn btn-block btn-outline-dark  mb-2   text-left"><i
                        class="fad fa-user  pr-2"></i>Usuarios</a>
                <a href="Operarios.html" class="btn btn-block btn-outline-dark  mb-2   text-left"><i
                        class="fad fa-user-hard-hat  pr-2"></i>Operarios</a>
                <a href="Produccion.html" class="btn btn-block btn-outline-dark mb-2 text-left "><i
                        class="fas fa-percentage pr-2"></i>Produccion</a>
                <a href="Empaque.html" class="btn btn-block btn-outline-dark  mb-2   text-left"><i
                        class="fas fa-box-open  pr-2"></i>Empaque</a>
                <a href="materialSeco.html" class="btn btn-block btn-outline-dark mb-2 text-left "><i
                        class="fas fa-tags pr-2"></i>Material Seco</a>
                <a href="Tinturados.html" class="btn btn-block btn-outline-dark  mb-2   text-left"><i
                        class="fas fa-spray-can  pr-2"></i>Tinturados</a>
                <a href="Picking.html" class="btn btn-block btn-outline-dark  mb-2   text-left"><i
                        class="fad fa-person-carry  pr-2"></i>Picking</a>
                <a href="tmProduccion.html" class="btn btn-block btn-outline-dark mb-2 text-left "><i
                        class="fas fa-stopwatch pr-2"></i>Tiempo Produccion</a>
                <a href="tmEmpaque.html" class="btn btn-block btn-outline-dark  mb-2   text-left"><i
                        class="fas fa-stopwatch pr-2"></i>Tiempo Empaque</a>
                <a href="tmGeneral.html" class="btn btn-block btn-outline-dark  mb-2   text-left"><i
                        class="fas fa-stopwatch pr-2"></i>Tiempo general</a>

            </div>

            <div class="col vh-100 border-left">


                <div class="row  border-bottom border-top">

                    <!-- Image and text -->
                    <nav class="navbar navbar-light w-100">
                        <div class="navbar-brand">
                            <img src="img/flower-blue.svg" width="30" height="30" class="d-inline-block">
                            <i><small class="font-weight-bold text-muted">AppFlower user</small></i>
                            Username()
                        </div>
                        <button type="button" class="btn text-danger ml-auto" id="btn-logOut"><i
                                class="fal fa-sign-out-alt fa-lg"></i></button>
                    </nav>

                </div>



                <div class="row m-3 justify-content-center">

                    <!--Primer Collapse-->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-3 mb-sm-3 mb-lg-0">

                        
                        <div id="accordion">

                            <!-- Reporte de Celulas (Primer tarjeta)-->
                            <div class="card mb-3">
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#carduno"
                                        aria-expanded="true" aria-controls="carduno">
                                        <i class="fas fa-flag pr-1"></i>Reporte de celulas
                                    </button>
                                </div>
                                <div id="carduno" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">

                                    <form class="m-3">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="nombre">Fecha inicial:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                            <div class="form-group col">
                                                <label for="nombre">Fecha final:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1">
                                            Promedio de celulas
                                            <a href="reportePromedio.php" type="button" class="btn text-primary"
                                                target="_blank"> <i class="fas fa-download"></i></a>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center  py-1">
                                            Tallos registrados
                                            <a href="#" type="button" class="btn text-primary" target="_blank"> <i
                                                    class="fas fa-download"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Reporte de  maquinas(Segunda Tarjeta)-->
                            <div class="card mb-3">

                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fas fa-flag pr-1"></i>Reporte de maquinas
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">

                                    <form class="m-3">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="nombre">Fecha inicial:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                            <div class="form-group col">
                                                <label for="nombre">Fecha final:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1">
                                            Rendimiento maquinas
                                            <a href="reportePromedio.php" type="button" class="btn text-primary"
                                                target="_blank"> <i class="fas fa-download"></i></a>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center  py-1">
                                            Rendimiento maquinas
                                            <a href="#" type="button" class="btn text-primary" target="_blank"> <i
                                                    class="fas fa-download"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>


                            <!--Reporte de maquinas tallo a tallo(Tercer tarjeta)-->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fas fa-flag pr-1"></i>Reporte de maquinas TaT
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">

                                    <form class="m-3">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="nombre">Fecha inicial:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                            <div class="form-group col">
                                                <label for="nombre">Fecha final:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1">
                                            Rendimiento de maquinas tallo a tallo
                                            <a href="reportePromedio.php" type="button" class="btn text-primary"
                                                target="_blank"> <i class="fas fa-download"></i></a>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center  py-1">
                                            Rendimiento de maquinas tallo a tallo
                                            <a href="#" type="button" class="btn text-primary" target="_blank"> <i
                                                    class="fas fa-download"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div><!--Fin de collapse-->
                        
                    </div>

                    <!--Segundo collapse-->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-3 mb-sm-3 mb-lg-0">

                        <div id="accordion2">

                            <!--Reporte de Picking (Primer tarjeta)-->
                            <div class="card mb-3">
                                <div class="card-header" id="heading1">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#tarjeta1"
                                        aria-expanded="true" aria-controls="tarjeta1">
                                        <i class="fas fa-flag pr-1"></i>Reporte picking
                                    </button>
                                </div>
                                <div id="tarjeta1" class="collapse" aria-labelledby="heading1"
                                    data-parent="#accordion2">

                                    <form class="m-3">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="nombre">Fecha inicial:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                            <div class="form-group col">
                                                <label for="nombre">Fecha final:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1">
                                            Rendimiento picking
                                            <a href="reportePromedio.php" type="button" class="btn text-primary"
                                                target="_blank"> <i class="fas fa-download"></i></a>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center  py-1">
                                            Rendimiento picking
                                            <a href="#" type="button" class="btn text-primary" target="_blank"> <i
                                                    class="fas fa-download"></i></a>
                                        </li>
                                    </ul>


                                </div>
                            </div>

                            <!--Reporte de producto final (Segunda tarjeta)-->
                            <div class="card mb-3">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#tarjeta2" aria-expanded="false" aria-controls="tarjeta2">
                                            <i class="fas fa-flag pr-1"></i>Reporte producto final
                                        </button>
                                    </h5>
                                </div>
                                <div id="tarjeta2" class="collapse" aria-labelledby="heading2"
                                    data-parent="#accordion2">

                                    <form class="m-3">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="nombre">Fecha inicial:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                            <div class="form-group col">
                                                <label for="nombre">Fecha final:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1">
                                            Rendimiento producto final
                                            <a href="reportePromedio.php" type="button" class="btn text-primary"
                                                target="_blank"> <i class="fas fa-download"></i></a>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center  py-1">
                                            Rendimiento producto final
                                            <a href="#" type="button" class="btn text-primary" target="_blank"> <i
                                                    class="fas fa-download"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <!--Reporte generales (Tercer tarjeta)-->
                            <div class="card mb-3">
                                <div class="card-header" id="heading3">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#tarjeta3" aria-expanded="false" aria-controls="tarjeta3">
                                        <i class="fas fa-flag pr-1"></i>Reportes generales
                                    </button>
                                </div>
                                <div id="tarjeta3" class="collapse" aria-labelledby="heading3"
                                    data-parent="#accordion2">

                                    <form class="m-3">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="nombre">Fecha inicial:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                            <div class="form-group col">
                                                <label for="nombre">Fecha final:</label>
                                                <input type="date" class="form-control" id="nombre"
                                                    placeholder="nombre de la materia">
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1">
                                            Rendimiento generales
                                            <a href="reportePromedio.php" type="button" class="btn text-primary"
                                                target="_blank"> <i class="fas fa-download"></i></a>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center  py-1">
                                            Rendimiento generales
                                            <a href="#" type="button" class="btn text-primary" target="_blank"> <i
                                                    class="fas fa-download"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--Fin de collapse-->

                    </div>

                </div>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>

</html>