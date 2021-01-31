<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.css">

    <script src="../public/bootstrap/js/bootstrap.js"></script>
    <script src="../public/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="scripts/usuario.js"></script>
    <title>New Usuario</title>
</head>


<body>

    <div class="content">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"">
                        <h2 class=" panel-title text-center" style="font-size: 20px">
                        <br>
                        Nuevo Usuario
                        </h2>
                        <br>
                        <?php include_once('fechayhora.php'); ?>
                    </div>

                    <div class="panel-body" id="formularioregistros">

                        <form name="formulario" id="formulario" method="POST">

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Nombre(*):</label>
                                <input type="hidden" name="idusuario" id="idusuario">
                                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Tipo Documento(*):</label>
                                <select class="form-control select-picker" name="tipo_documento" id="tipo_documento" required>
                                    <option value="RUT">RUT</option>
                                    <option value="PASAPORTE">PASAPORTE</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Número(*):</label>
                                <input type="text" class="form-control" name="num_documento" id="num_documento" maxlength="20" placeholder="Documento" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Dirección(*):</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" maxlength="70">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Teléfono(*):</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" maxlength="20" placeholder="Teléfono">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Email(*):</label>
                                <input type="email" class="form-control" name="email" id="email" maxlength="50" placeholder="Email">
                            </div>


                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Cargo(*):</label>
                                <select class="form-control select-picker" name="cargo" id="cargo" required>
                                    <option value="Vendedor">Vendedor</option>
                                    <option value="Jefe de Adquisiciones">Jefe de Adquisiciones</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Login (*):</label>
                                <input type="text" class="form-control" name="login" id="login" maxlength="20" placeholder="Login" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Clave (*):</label>
                                <input type="password" class="form-control" name="clave" id="clave" maxlength="64" placeholder="Clave" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Permisos(*):</label>
                                <ul style="list-style: none;" id="permisos">

                                </ul>
                            </div>

                            <!--
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Imagen:</label>
                                <input type="file" class="form-control" name="imagen" id="imagen">
                                <input type="hidden" name="imagenactual" id="imagenactual">
                                <img src="" width="150px" height="120px" id="imagenmuestra">
                            </div>-->

                            <div class="form-group col-md-12" style="text-align: left">
                                <button class="btn btn-primary" type="submit" id="btnGuardar">Guardar</button>
                            </div>

                        </form>
                        <br>


                        <div class="form-group col-md-12" style="text-align: left">
                            <form method="get" action="login.html">
                                <button type="submit" class="btn btn-danger">Volver</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3"></div>

        </div>
    </div>
</body>

<script type="text/javascript" src="scripts/usuario.js"></script>