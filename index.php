<html>
  <?php include 'layout/head.php'; ?>
  

  <body class="modal-open">
    <div class="container">
        

         <!-- Modal -->
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
                   <li class="nav-item active"><a href="index.php" class="nav-link">Paso 1<br><small>Datos del Cliente</small></a></li>
                   <li class="nav-item done"><a href="#" class="nav-link">Paso 2<br><small>Datos del Vehículo</small></a></li>
                   <li class="nav-item done"><a href="#" class="nav-link">Paso 3<br><small>Trabajos a realizar</small></a></li>
                   <li class="nav-item done"><a href="#" class="nav-link">Paso 4<br><small>Finalizar Presupuesto</small></a></li>
                   <li class="nav-item done"><a href="verpresupuestos.php" class="nav-link">Paso 5<br><small>Imprimir Presupuestos</small></a></li>
                </ul>
                
                <!--  Formulario -->
                <div class="mt-4 sw-container tab-content" style="min-height: 92px;">
                  <form action="vehiculo.php" method="post">
                    <div id="step-1" class="tab-pane step-content" style="display: block;">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Fecha del Presupuesto:</label> 
                          <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                      </div>
                      
                      <div class="row mt-3">
                        <div class="col-md-6"> 
                          <label>Propietario: (apellido y nombre)</label>
                          <input type="text" class="form-control" id="propietario" name="propietario" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        </div>
                        <div class="col-md-6"> 
                          <label>Domicilio:</label>
                          <input type="text" class="form-control" id="domicilio" name="domicilio" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-6"> 
                          <label>Teléfono: (Celular o Tel de Linea)</label>
                          <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="col-md-6"> 
                          <label>Plazo para la entrega del vehículo reparado:</label>
                          <input type="text" class="form-control" id="plazo" name="plazo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                      </div>
                      <hr>
                      <div class="row mt-3">
                        <div class="col-md-12" style="text-align: right;"> 
                          <input type="submit" class="btn btn-primary btn-sm" name="Continuar" value="Proximo paso >>">
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