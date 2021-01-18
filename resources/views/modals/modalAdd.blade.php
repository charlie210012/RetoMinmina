<!-- Modal -->
<div class="modal fade" id="addrol" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Añadir usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      <div class="modal-body">
          
          <div class="tile">
            <div class="tile-body">
              <form id ="snuevo" name ="snuevo" action ="/registers" method ="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label">Nombres</label>
                  <input class="form-control" id="nombres" name="nombres" type="text" placeholder="Escriba su nombre completo">
                </div>
                <div class="form-group">
                  <label class="control-label">Apellidos</label>
                  <input class="form-control" id ="apellidos" name="apellidos" type="text" placeholder="Escriba sus apellidos" >
                </div>
                <div class="form-group">
                  <label class="control-label">Tipo de documento</label>
                  <select class="form-control" id="typedocument" name="typedocument">
                      <option>Tipo de documento</option>
                      <option>Cedula de ciudadania</option>
                      <option>Tarjeta de identidad</option>
                      <option>Pasarporte</option>
                      <option>Cedula de extrajeria</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Numero de identificacion</label>
                  <input class="form-control" id ="numidentificacion" name="numidentificacion" type="text" placeholder="Escriba su numero de documento" >
                </div>
                <div class="form-group">
                  <label class="control-label">Pasatiempo</label>
                  <input class="form-control" id ="pasatiempo" name="pasatiempo" type="text" placeholder="Cuales son sus pasatiempos?" >
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Subir foto</label>
                    <input class="form-control-file" id="exampleInputFile" type="file" aria-describedby="fileHelp"><small class="form-text text-muted" id="foto">Sube una foto de perfil que te identifique</small>
                  </div>
                
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id ="boton" name="boton">Guardar</button>
                </div>
              </form>
            </div>
          </div>
      </div>
      
    </div>
  </div>
</div>