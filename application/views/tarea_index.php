<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Asignacion de Actividades</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url("resources/css/bootstrap.min.css"); ?>" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <br><br><br>
            <form>
                <div class="form-group">
                    <label for="servicio">Servicios</label>
                    <select class="form-control" id='servicio'  >
                        <option >-- Seleccionar Opcion --</option>
                        <?php foreach ($servicio as $servi) { ?>
                            <option value=<?php echo $servi->servicio_id; ?>><?php echo $servi->nombre; ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="unidad" id=''>Unidades</label>
                    <select class="form-control" id='unidad'>
                           
                    </select>
                </div>
                <div class="form-group">
                    <label for="responsable">Responsables</label>
                    <select class="form-control" id='responsable'>

                    </select>
                </div>


                <div class="form-group">
                    <label for="nombre">Nombre de Tarea</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre Tarea">
                </div>



                <button type="submit" class="btn btn-default">Asignar Actividad</button>
            </form>


        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="<?php echo base_url("resources/js/jquery.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/bootstrap.min.js"); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                $('select').select2();
                
                $('#servicio').change(function () {
                    $('#unidad').empty();
                    $('#responsable').empty();
                    $('#unidad').append('<option>--Seleccionar Unidad--</option>');
                    var servicio_id = $('#servicio').val();
                    $.get("Tarea/obtenerUnidades/" + servicio_id, function (data, status) {
                        datos = $.parseJSON(data);
                        $.each(datos, function (i, item) {
                            $('#unidad').append('<option value='+item.unidad_id+'>'+item.nombre+'</option>');
                        });
                    });
                });
                $('#unidad').change(function () {
                    $('#responsable').empty();
                    $('#responsable').append('<option>--Seleccionar Responsable--</option>');
                    var unidad_id = $('#unidad').val();
                    $.get("Tarea/obtenerResponsables/" + unidad_id, function (data, status) {
                        datos = $.parseJSON(data);
                        $.each(datos, function (i, item) {
                            $('#responsable').append('<option value='+item.responsable_id+'>'+item.nombre+'</option>');
                        });
                    });
                });
            });
        </script>
    </body>
</html>