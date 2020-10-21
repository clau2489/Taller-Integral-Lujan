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
                       <li class="nav-item active"><a href="" class="nav-link">Paso 1<br><small>Datos del Cliente</small></a></li>
                       <li class="nav-item active"><a href="javascript: history.go(-1)" class="nav-link">Paso 2<br><small>Datos del Vehículo</small></a></li>
                       <li class="nav-item active"><a href="#" class="nav-link">Paso 3<br><small>Detalle de Trabajos</small></a></li>
                       <li class="nav-item done"><a href="#" class="nav-link">Paso 4<br><small>Finalizar Presupuesto</small></a></li>
                       <li class="nav-item done"><a href="verpresupuestos.php" class="nav-link">Paso 5<br><small>Imprimir Presupuestos</small></a></li>
                    </ul>

                          <?php
                          $fecha = $_POST['fecha'];
                          $propietario = $_POST['propietario'];
                          $domicilio = $_POST['domicilio'];
                          $telefono = $_POST['telefono'];
                          $plazo = $_POST['plazo'];
                          $clase = $_POST['clase'];
                          $marca = $_POST['marca'];
                          $tipo = $_POST['tipo'];
                          $mesanio = $_POST['mesanio'];
                          $motorochasis = $_POST['motorochasis'];
                          $patente = $_POST['patente'];
                          $kilometraje = $_POST['kilometraje'];
                          ?>
                        <form action="finalizar.php" method="post">                                                                         
                         <div class="mt-4 sw-container tab-content" style="min-height: 92px;">
                             <div id="step-1" class="tab-pane step-content" style="display: block;">
                                 <div class="row mt-3">
                                  <input type="hidden" name="fecha" id="fecha" value="<?php echo $fecha ?>">
                                  <input type="hidden" name="propietario" id="propietario" value="<?php echo $propietario ?>">
                                  <input type="hidden" name="domicilio" id="domicilio" value="<?php echo $domicilio ?>">
                                  <input type="hidden" name="telefono" id="telefono" value="<?php echo $telefono ?>">
                                  <input type="hidden" name="plazo" id="plazo" value="<?php echo $plazo ?>">
                                  <input type="hidden" name="clase" id="clase" value="<?php echo $clase ?>">
                                  <input type="hidden" name="marca" id="marca" value="<?php echo $marca ?>">
                                  <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo ?>">
                                  <input type="hidden" name="mesanio" id="mesanio" value="<?php echo $mesanio ?>">
                                  <input type="hidden" name="motorochasis" id="motorochasis" value="<?php echo $motorochasis ?>">
                                  <input type="hidden" name="patente" id="patente" value="<?php echo $patente ?>">
                                  <input type="hidden" name="kilometraje" id="kilometraje" value="<?php echo $kilometraje ?>">
                                 </div>
                                 <div class="row mt-3 scroll">
                                     <div class="col-md-12"> 
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th>Parte del Automovil</th>
                                            <th>Sección</th>
                                            <th>Reponer</th>
                                            <th>Reacondicionar</th>              
                                          </tr>
                                        </thead>
                                        <?php
                                        require_once ("config/db.php");
                                        require_once ("config/conexion.php");
                                        $query=mysqli_query($con,"select * from autopartes");  
                                        while($rw=mysqli_fetch_array($query)) {  
                                        ?>                
                                        <tbody>
                                          <tr>
                                            <td><?php echo utf8_encode($rw['nombre']); ?></td>
                                            <td><?php echo utf8_encode($rw['seccion']); ?></td>
                                            <td width="20px" style="text-align: center"><input type="checkbox" name="check_lista[]" value="RENOVACION - <?php echo utf8_encode($rw['nombre']); ?>"></td>
                                            <td width="20px" style="text-align: center"><input type="checkbox" name="check_lista[]" value="REPARACION - <?php echo utf8_encode($rw['nombre']); ?>"></td>                                       
                                            <?php
                                            }
                                            ?>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                 </div>
                                 <hr>
                                <div class="row mt-3">                                   
                                    <div class="col-md-12" style="text-align: right;">
                                        <input type="submit" class="btn btn-primary" name="enviar" value="Próximo paso >>">
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