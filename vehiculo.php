<html>
<head>
  <?php include 'layout/head.php'; ?>
  <body class="modal-open">
    <div class="container">

        <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true" style="display: block;">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    
                    <div class="modal-header">
                      <div style="text-align: center;">
                        <img src="tallerlujan.png" width="200px">
                        <br>        
                      </div>
                      <div style="text-align: right;">
                        <h5 class="modal-title" id="exampleModalLabel">Presupuestos de Trabajos</h5>
                        <br>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                        <a href="index.php"><span aria-hidden="true" style="color: red; font-size: 14px"><i class="fa fa-refresh"></i> Limpiar Datos</span></a></button>
                      </div>
                    </div>

                    <div class="modal-body">
                     <div id="smartwizard" class="sw-main sw-theme-arrows">
                         

                    <!-- Menu Progresivo -->
                    <ul class="nav nav-tabs step-anchor">
                       <li class="nav-item active"><a href="javascript: history.go(-1)" class="nav-link">Paso 1<br><small>Datos del Cliente</small></a></li>
                       <li class="nav-item active"><a href="#" class="nav-link">Paso 2<br><small>Datos del Vehículo</small></a></li>
                       <li class="nav-item done"><a href="#" class="nav-link">Paso 3<br><small>Detalle de Trabajos</small></a></li>
                       <li class="nav-item done"><a href="#" class="nav-link">Paso 4<br><small>Finalizar Presupuesto</small></a></li>
                       <li class="nav-item done"><a href="verpresupuestos.php" class="nav-link">Paso 5<br><small>Imprimir Presupuestos</small></a></li>                      
                    </ul>
                        
                        <?php
                        $fecha = $_POST['fecha'];
                        $propietario = $_POST['propietario'];
                        $domicilio = $_POST['domicilio'];
                        $telefono = $_POST['telefono'];
                        $plazo = $_POST['plazo'];
                        ?> 

                        <form action="trabajos.php" method="post">                                                                         
                         <div class="mt-4 sw-container tab-content" style="min-height: 92px;">
                             <div id="step-1" class="tab-pane step-content" style="display: block;">
                                 <div class="row mt-3">
                                    <input type="hidden" name="fecha" id="fecha" value="<?php echo $fecha ?>">
                                    <input type="hidden" name="propietario" id="propietario" value="<?php echo $propietario ?>">
                                    <input type="hidden" name="domicilio" id="domicilio" value="<?php echo $domicilio ?>">
                                    <input type="hidden" name="telefono" id="telefono" value="<?php echo $telefono ?>">
                                    <input type="hidden" name="plazo" id="plazo" value="<?php echo $plazo ?>">
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> 
                                        <label>Clase de Vehículo: </label>
                                        <input type="text" class="form-control" id="clase" name="clase" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="col-md-6"> 
                                        <label>Marca de Vehículo: </label>
                                        <input type="text" class="form-control" id="marca" name="marca" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> 
                                        <label>Tipo de Vehículo: </label>
                                        <input type="text" class="form-control" id="tipo" name="tipo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="col-md-6"> 
                                        <label>Mes/ Año: </label>
                                        <input type="text" class="form-control" id="mesanio" name="mesanio" >
                                    </div>
                                 </div>

                                 <div class="row mt-3">
                                     <div class="col-md-6"> 
                                        <label>N° Motor o Chasis: </label>
                                        <input type="text" class="form-control" id="motorochasis" name="motorochasis">
                                    </div>
                                    <div class="col-md-6"> 
                                        <label>N° Patente: </label>
                                        <input type="text" class="form-control" id="patente" name="patente" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> 
                                        <label>Kilometraje: </label>
                                        <input type="text" class="form-control" id="kilometraje" name="kilometraje">
                                    </div>
                                 </div>
                                 <hr>
                                <div class="row mt-3">                                   
                                    <div class="col-md-12" style="text-align: right;">
                                        <input type="submit" class="btn btn-primary btn-sm" name="Continuar" value="Próximo Paso >>">
                                    </div>                                           
                                </div>
                             </div>
                         </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>								                            
    <div class="modal-backdrop fade show"></div>
</body>
</html>