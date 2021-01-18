@include('header')
@include('nav')

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
<!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Gestion de datos de usuarios <a href="#" class="btn btn-primary btn-icon-split" onclick = "openmodal();">
                    <span class="icon text-white-50">
                      <i class="fas fa-hand-holding-medical"></i>
                    </span>
                    <span class="text">Añadir usuario</span>
                  </a></h1>
                  <hr/>    
<!-- Content Row -->
<h1 class="h3 mb-2 text-gray-800">Datos de usuarios</h1>
        <div class="row">
        
          
          <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-2">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Datos</div>
                      <h6>Cantidad de registros: {{ count($registers) }}</h6>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Seguimiento de registros</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-bordered" id="registros" name ="registros" width="100%" cellspacing="0">
                  <thead>
                    
                      <th>id</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Tipo de identificacion</th>
                      <th># de identificacion</th>
                      <th>Pasatiempos</th>
                      <th>Foto</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($registers as $register)
                  <tr>
                  <td> {{ $register -> id }} </td>
                  <td> {{ $register -> name }}</td>
                  <td> {{ $register -> lastname }}</td>
                  <td> {{ $register -> Id_type }}</td>
                  <td> {{ $register -> id_user }}</td>
                  <td> {{ $register -> hobbies }}</td>
                  <td> <a href="#" class="btn btn-info btn-circle btneditar" onclick="openmodalver('.{{ $register -> uri_photo }}.');" id="btneditar" rl="'.{{ $register -> uri_photo }}.'"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                  <td> <a href="#" class="btn btn-info btn-circle btneditar" onclick = "openmodaleditar('.{{ $register -> id }}.');" id="btneditar" rl = "'.{{ $register -> id }}.'" ><i class="fas fa-info-circle"></i></a></td>
                  <td> <a href="#" class="btn btn-danger btn-circle" rl= "'.{{ $register -> id }}.'" id = "btnborra" onclick= "borrardato('{{ $register -> id }}');"><i class="fas fa-trash"></i></a> </td>
                  </tr>
                  @endforeach
                  
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      @include('footer')
      
