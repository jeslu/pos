<!-- integrar la perte de header.php-->
<?php include_once 'views/templates/header.php' ?>
<!-- final de header.php-->
<div class="card">
  <div class="card-body">
    <!-- inicia el nav de formularios-->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      NUEVO USUARIO
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Usuarios</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  id="formulario" autocomplete="off">

              <div class="row">
                  <div class="col-lg-6 col-sm-6 mb-2">
                    <div class="input-group mb-2"><i class="fas fa-user"></i>
                        <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <span id="errorNombre" class="text-danger"></span>
                  </div>
  
                  <div class="col-lg-6 col-sm-6">
                    <div class="input-group mb-3"><i class="fas fa-list-alt"></i>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <span id="errorApellido" class="text-danger"></span>
                  </div>
  
                  <div class="col-lg-6 col-sm-6">
                    <div class="input-group mb-3"><i class="fas fa-phone"></i>
                        <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <span id="errorTelefono" class="text-danger"></span>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="input-group mb-3"><i class="fas fa-home"></i>
                        <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <span id="errorDireccion" class="text-danger"></span>
                  </div>
                  <div class="col-lg-7 col-sm-6">
                    <div class="input-group mb-3"><i class="fas fa-list-alt"></i>
                      <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo Electronico" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <span id="errorCorreo" class="text-danger"></span>

                  </div>

                  <div class="col-lg-4 col-sm-6">
                    <div class="input-group mb-3"><i class="fas fa-lock"></i>
                        <input type="password" id="clave" name="clave" class="form-control" placeholder="Clave" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <span id="errorClave" class="text-danger"></span>
                  </div>
  
  
  
              <div class="input-group mb-3">
            
                  <div class="input-group-prepend">
                      <label class="input-group-text" for="rol"><i class="fas fa-id-card"></i>Rol</label>
                    </div>
                    <select class="custom-select" id="rol" name="rol">
                      <option value="" selected>Selecciona</option>
                      <option value="1">ADMINISTRADOR</option>
                      <option value="2">VENDEDOR</option>
                    </select>
                  </div>
                  <span id="errorRol" class="text-danger"></span>
              </div>
             
              <button type="submit" id="btnAccion" class="btn btn-primary">Guardar</button>
            </form>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    <!-- finaliza el nav de formularios-->


    <h5 class="card-title text-center">Usuarios</h5>
    <hr>

    <table class="table table-bordered table-striped table-hove" id="tbUsuarios" style="width: 100%;">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>correo</th>
          <th>tel</th>
          <th>direccion</th>
          <th>rol</th>
          <th>Acciones</th>

        </tr>
      </thead>

      <tbody>
        <tr>
          <td></td>
        </tr>
      </tbody>
    </table>


    <!-- finaliza el nav de formularios-->



  </div>


</div>

<!-- incluir la parte del footer.php-->
<?php include_once 'views/templates/footer.php' ?>
<!-- termina la parte del footer.php-->