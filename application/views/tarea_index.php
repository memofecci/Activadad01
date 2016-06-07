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
            <br><br><br><br>
            <form>
                <div class="form-group">
                    <label for="servicio">Servicios</label>
                    <select class="form-control" id="servicio">
                        
                        <?php foreach ($servicio as $servi) { ?>
                        <option value="<?php echo $servi->servicio_id; ?>"><?php echo $servi->nombre; ?></option>
                        <?php } ?>
                            
                    </select>
                </div>
                <div class="form-group">
                    <label for="unidad">Unidades</label>
                    <select class="form-control" id="unidades">
                                                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="responsable">Responsables</label>
                    <select class="form-control" id="responsable">
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre de Tarea</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre Tareal">
                </div>
                <button type="submit" class="btn btn-default">Asignar Actividad</button>
            </form>


        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="<?php echo base_url("resources/js/jquery.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/bootstrap.min.js"); ?>"></script>
        <script>
                $(document).ready(function(){
                    //cuando el servicio cambia
                    $('#servicio').change(function(){
                        var servicio_id=$('#servicio').val();
                        //pidiendo JSON
                        $.get("Tarea/obtenerUnidades/"+servicio_id, function(data, status){
                             datos = $.parseJSON(data);
                                $.each(datos, function (i, item) {
                                    console.log(item);

                              });
                           // console.log("Data: " + data + "\nStatus: " + status);
                      });
                    });
                });


        </script>
    </body>
</html>
