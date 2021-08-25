<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="icon" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <img src="Imagenes/logo.png" alt="" id="icon" style="margin: auto; width:80px">
      </div>
      <div class="modal-body">
        <form method="POST" action="">
            <div class="form-row">
                <label for="nombre"><strong>Usuario</strong></label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre de usuario" required>
            </div>
            <br>
            <div class="form-row">
                <label for="clave"><strong>Contraseña</strong></label>
                <input type="password" class="form-control" id="clave" placeholder="Nombre de usuario" required>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Iniciar Sesion</button>
        </form>
      </div>
    </div>
  </div>
</div>

