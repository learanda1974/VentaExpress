<div class="list-group">
<a class="list-group-item" href="<?=URLBASE;?>"><i class="fa fa-home fa-2x"></i> Venta Express</a>
<a id="subIngreso" class="list-group-item submenu" href="<?=URLBASE;?>contenido/Ingreso.php" ><i class="fa fa-sun-o fa-2x"></i> Ingreso Venta</a>
<a id="subInforme" class="list-group-item submenu" href="<?=URLBASE;?>contenido/Informes.php" ><i class="fa fa-sun-o fa-2x"></i> Ingreso Informes</a>
<a id="subConsulta" class="list-group-item submenu" href="<?=URLBASE;?>contenido/Consulta.php" ><i class="fa fa-sun-o fa-2x"></i> Ingreso Consulta</a>


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
    
</div>
