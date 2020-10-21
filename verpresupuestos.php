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
                       <li class="nav-item active"><a href="" class="nav-link">Paso 2<br><small>Datos del Vehículo</small></a></li>
                       <li class="nav-item active"><a href="" class="nav-link">Paso 3<br><small>Detalle de Trabajos</small></a></li>
                       <li class="nav-item active"><a href="javascript: history.go(-1)" class="nav-link">Paso 4<br><small>Finalizar Presupuesto</small></a></li>
                       <li class="nav-item active"><a href="verpresupuestos.php" class="nav-link">Paso 5<br><small>Imprimir Presupuestos</small></a></li>
                    </ul>                                                                         
                        <div class="mt-4 sw-container tab-content" style="min-height: 92px;">
                             <div id="step-1" class="tab-pane step-content" style="display: block;">
                                 <div class="row mt-3 scroll">
                                     <div class="col-md-12"> 
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th>N° </th>
                                            <th>Fecha</th>
                                            <th>Propietario</th>
                                            <th>Domicilio</th>
                                            <th>Telefono </th>
                                            <th>Vehiculo</th>              
                                          </tr>
                                        </thead>
                                        <?php
                                        require_once ("config/db.php");
                                        require_once ("config/conexion.php");
                                        $query=mysqli_query($con,"select * from presupuesto order by id DESC");  
                                        while($rw=mysqli_fetch_array($query)) {  
                                        ?>                
                                        <tbody>
                                          <tr>
                                            <td><?php echo utf8_encode($rw['id']); ?></td>
                                            <td><?php echo utf8_encode($rw['fecha']); ?></td>
                                            <td><a href="imprimir.php?id=<?php echo utf8_encode($rw['id']); ?>" target="_blank"><?php echo utf8_encode($rw['propietario']); ?></a></td>
                                            <td><?php echo utf8_encode($rw['domicilio']); ?></td>
                                            <td><?php echo utf8_encode($rw['telefono']); ?></td>
                                            <td><?php echo utf8_encode($rw['marca']); ?> - <?php echo utf8_encode($rw['tipo']); ?></td>                                       
                                            <?php
                                            }
                                            ?>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                 </div>
                                <div class="row mt-3">                                   
                                    <div class="col-md-12" style="text-align: right;">
                                        <input type="submit" class="btn btn-primary btn-sm" name="enviar" value="Continuar">
                                    </div>                                           
                                </div>                                 
                             </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                                            
    <div class="modal-backdrop fade show"></div>
</body>
</html>