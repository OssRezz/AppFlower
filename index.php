<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" charset=UTF-8>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="css/stylo2.css">
    <title>Inicio de sesión</title>
</head>

<body>

    <div id="respuesta"></div>

    <div class="container-fluid">

        <div class="row">
            <div class="col d-flex justify-content-center" style="margin-top: 7rem;">

                <div class="card p-0 mb-4 bg-white rounded" style="width: 21rem;">

                    <div class="card-header text-center bg-white text-dark border-0 mt-4">
                        <img src="img/bouquet (1).png" class="mb-2" width="80" height="80" class="d-inline-block">
                        <h5 class="p-0 m-0">- AppFlower -</h5>
                        <small>Flores Isabelita</small><hr class="w-75">
                    </div>

                    <div class="card-body text-muted">

                        <div class="form-row">
                            <div class="form-group col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text fas fa-user bg-white text-dark"></span>
                                    </div>
                                    <input type="text" class="form-control" id="nombre"
                                    placeholder="Nombre de usuario">
                                </div>
                                
                                
                            </div>
                            <div class="form-group col-12 ">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text fas fa-key bg-white text-dark"></span>
                                    </div>

                                    <input type="password" class="form-control" id="password"
                                    placeholder="Contraseña">

                                </div>
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-center px-1">
                            <a href="#" type="button" class="btn btn-lg btn-outline-primary d-flex align-items-center " id="btn-login">
                                <i class="fal fa-sign-in-alt"></i>
                            </a>
                        </div>   

                    </div>



                    <div class="card-text bg-white d-flex justify-content-center border-0 py-1">
                        <div class="form-row">
                            <a href="#" type="button" class="btn btn-link text-dark btn-sm">
                                <small>olvidaste tu contraseña?</small>
                            </a>
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