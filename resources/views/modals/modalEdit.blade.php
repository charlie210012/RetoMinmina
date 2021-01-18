<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titulomodal">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form id ="snuevo1" name ="snuevo1" method ="POST">
                 <input class="form-control" id="id" name ="id" type="text" placeholder="id" readonly="">
                <div class="form-group">
                  <label class="control-label">Nombres</label>
                  <input class="form-control" id="nombres1" name="nombres1" type="text" placeholder="Escriba su nombre completo">
                </div>
                <div class="form-group">
                  <label class="control-label">Apellidos</label>
                  <input class="form-control" id ="apellidos1" name="apellidos1" type="text" placeholder="Escriba sus apellidos" >
                </div>
                <div class="form-group">
                  <label class="control-label">Tipo de documento</label>
                  <select class="form-control" id="typedocument1" name="typedocument1">
                      <option>Tipo de documento</option>
                      <option>Cedula de ciudadania</option>
                      <option>Tarjeta de identidad</option>
                      <option>Pasarporte</option>
                      <option>Cedula de extrajeria</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Numero de identificacion</label>
                  <input class="form-control" id ="numidentificacion1" name="numidentificacion1" type="text" placeholder="Escriba su numero de documento" >
                </div>
                <div class="form-group">
                  <label class="control-label">Pasatiempo</label>
                  <input class="form-control" id ="pasatiempo1" name="pasatiempo1" type="text" placeholder="Cuales son sus pasatiempos?" >
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Subir foto</label>
                    <input class="form-control-file" id="exampleInputFile1" type="file" aria-describedby="fileHelp"><small class="form-text text-muted" id="foto1">Sube una foto de perfil que te identifique</small>
                  </div>
                
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id ="btnz" name="btnz">Actualizar</button>
                </div>
              </form>
            </div>
          </div>
      </div>
      
    </div>
  </div>
</div>