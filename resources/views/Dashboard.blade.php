@include('header')
@include('nav')
@include('modals.modalAdd')
@include('modals.modalEdit')

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
                  <td> <a href="#" class="btn btn-info btn-circle btneditar" onclick="openmodalver('{{ $register -> uri_photo }}');" id="btneditar" rl="'.{{ $register -> uri_photo }}.'"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                  <td> <a href="#" class="btn btn-info btn-circle btneditar" onclick = "openmodaleditar('{{ $register }}');" id="btneditar" rl = "'.{{ $register -> id }}.'" ><i class="fas fa-info-circle"></i></a></td>
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
      
