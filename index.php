<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Venta Express</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        
        <div id="contenedor" style="color: brown;">
            <div id="titulo"></div>
            <div id="menu"><?php include('lib/menu.php');?></div>
            <div id="contenido"></div>
        </div>
        
    </body>
    
    <!-- <div class="list-group">
    <a class="list-group-item" href="<?=URLBASE;?>"><i class="fa fa-home fa-2x"></i> Home</a>
    <a id="prisolicitud" class="list-group-item" href="#" data-toggle="tooltip" data-placement="right" title="Acceda a las solicitudes"><i class="fa fa-file-o fa-2x"></i> Solicitudes</a>
    <a id="subsolicitud" class="list-group-item submenu" href="<?=URLBASE;?>contenido/formvacaciones.php" ><i class="fa fa-sun-o fa-2x"></i> Ingreso Vacaciones</a>
    <a id="subsolicitud-lista" class="list-group-item submenu" href="<?=URLBASE;?>contenido/formlistavacaciones.php" ><i class="fa fa-sun-o fa-2x"></i> Ver Vacaciones Solicitadas</a>
    <a class="list-group-item" href="#"><i class="fa fa-birthday-cake fa-2x"></i> Cumpleaños</a>
    <a class="list-group-item" href="#"><i class="fa fa-file-o fa-2x"></i> Certificados</a>
    <a class="list-group-item" href="#"><i class="fa fa-file-o fa-2x"></i> Resumen</a>
    </div> -->

    <script>
        $("#prisolicitud").on( "click", function( event ) {
            if(($("[id*=subsolicitud]").css("display")!="none")){
                 $("[id*=subsolicitud]").css("display","none");
            }
            else{
                $("[id*=subsolicitud]").show();
                $("[id*=subsolicitud]").css("display","block");
            }
                
                
            });
        
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>
</html>
