 <!-- Footer -->
 <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Created by &copy; Carlos Andres Arevalo Cortes</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<!-- Bootstrap core JavaScript-->

  <script type ="text/javascript" src="https://sidevtech.com/Construprado/vendor/jquery/jquery.min.js"></script>
  <script type ="text/javascript" src="https://sidevtech.com/Construprado/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script type ="text/javascript" src="https://sidevtech.com/Construprado/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script type ="text/javascript" src="https://sidevtech.com/Construprado/js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script type ="text/javascript" src="https://sidevtech.com/Construprado/vendor/datatables/jquery.dataTables.min.js"></script>
  <script type ="text/javascript" src="https://sidevtech.com/Construprado/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script type ="text/javascript" src="https://sidevtech.com/Construprado/js/demo/datatables-demo.js"></script>
  
  
  
  <!--adiccional-->
<!--<script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
<script src ="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>-->
<script src ="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src ="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

<!--Adicionales-->
<script src="https:/sidevtech.com/Construprado/js/bootstrap-datepicker.min.js"></script>
<!--<script type ="text/javascript"  src="js/sweetalert2.all.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type ="text/javascript" src="https:/sidevtech.com/Construprado/js/codigo.js"></script>
<!--function add-->

<script>
    $('#demoDate').datepicker({
        Default: 'es',
      	format: "yyyy-mm-dd",
      	autoclose: true,
      	todayHighlight: true
      });
</script>
<script>
    $('#fechalimite').datepicker({
        Default: 'es',
      	format: "yyyy-mm-dd",
      	autoclose: true,
      	todayHighlight: true
      });
</script>


    <script>
     $(document).ready(function() {
     var registros = $('#registros').DataTable({
        "language":{
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    //nuevo dato
    $(document).on("click","#btnx",function(){
        var datos = $('#snuevo').serialize();
        $.ajax({
            type: "POST",
            url:  "renovacionsnuevo.php",
            data: datos,
            success: function(r){
                if(r=="error"){
                    Swal.fire({        
                    title: '¡Atención!',
                    text: 'Todos los campos son obligatorios', 
                    icon: 'error',
                     });
                }else{
                    Swal.fire({        
                    title: '¡Felicidades!',
                    text: 'Los datos fueron agregados con exito',
                    icon: 'success',
                     });
                     $('#demoDate').val('');
                     $('#cantidad').val('');
                     $('#manga').val('');
                     $('#costoprado').val('');
                     $('#tipoprado').val('');
                     $('#obra').val('');
                     $('#cantidadgestion').val('');
                     $('#costogestion').val('');
                     $('#diferencia').val('');
                     $('#proveedor').val('');
                     $('#trabajador').val('');
                     registros.ajax.reload();
                     
                     
                     
                }
                
                
            }
            
        })
        return false
    }); 
    //actualizar dato
    $(document).on("click","#btnz",function(){
        var datos1 = $('#snuevo1').serialize();
        $.ajax({
            type: "POST",
            url:  "actualizarsnuevo.php",
            data: datos1,
            success: function(r){
                if(r=="error"){
                    Swal.fire({        
                    title: '¡Atención!',
                    text: 'Los datos no fueron actualizados', 
                    icon: 'error',
                     });
                }else{
                    Swal.fire({        
                    title: '¡Felicidades!',
                    text: 'Los datos fueron actualizados con exito',
                    icon: 'success',
                     });
                     SeguimientoN.ajax.reload();
                }
                
                
            }
            
        })
        return false;
    });
    });    
    </script>
   
  
    <script>
    function openmodal(){
        $('#addrol').modal('show');
    }
    </script>
    
    <script>
    
    function hidemodal(){
        $('#addrol').modal('hide');
    }
    </script>
<!--funcion de modal-->

<script>
// Este codigo lanza el modals de la edicion de los datos en la pagina SeguimientoNuevo, y sirve para mostras los datos a editar, enlazado a extraersn.php para sacar esos datos//
function openmodaleditar(id){
    $('#editar').modal('show');
         var datos  = {
             "id": id,
         };
         $.ajax({
            type: "POST",
            url:  "extraersn.php",
            data: datos,
            success: function(r){
                var datoss = JSON.parse(r);
                var procesop = datoss[0]["14"];
                var procesot = datoss[0]["15"];
                document.getElementById("id").value = datoss[0]["id"];
                document.getElementById("obra1").value = datoss[0]["7"];
                document.getElementById("costogestion1").value = datoss[0]["10"];
                document.getElementById("proveedor1").value = datoss[0]["12"];
                document.getElementById("trabajador1").value = datoss[0]["13"];
                document.getElementById("cantidadg1").value = datoss[0]["8"];
                document.getElementById("demoDate1").value = datoss[0]["Fecha"];
                document.getElementById("cantidad1").value = datoss[0]["2"];
                document.getElementById("manga1").value = datoss[0]["3"];
                document.getElementById("costoprado1").value = datoss[0]["4"];
                document.getElementById("tipoprado1").value = datoss[0]["6"];
                document.getElementById("procesot").value = procesot;
                if (procesop == 0){
                    document.getElementById("procesop").value = "No pagado";
                }else{
                    document.getElementById("procesop").value = "Pagado";
                }
                if (procesot == 0){
                    document.getElementById("procesot").value = "No pagado";
                }else{
                    document.getElementById("procesot").value = "Pagado";
                }
                
                return false;
                
            }
            
        });
    }

</script>
<script>
function borrardato(id){
     
    Swal.fire({
    title: 'Esta seguro?',
    text: "Se borrara el dato con id: " + id,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si,borrar!',
    cancelButtonText: 'No, cancelar!',
    }).then((result) => {
    if (result.isConfirmed){
            var datos  = {
               "id": id,
         };
         $.ajax({
            type: "POST",
            url:  "eliminarsn.php",
            data: datos,
            success: function(r){
                aler(r);
                return false;
                if (r=="ok"){
                   Swal.fire({
                   title: 'Felicidades!',
                   text:'Se ha borrado el dato con exito',
                   icon: 'success',
                   confirmButtonText: 'OK!',
                   }).then((res)=> {
                       if (res.isConfirmed){
                           location.reload();
                       }
                   })
                }
            }
         });   
    }else {
         Swal.fire({
           title: 'Procesado!',
           text:'No se ha borrado el dato',
           icon: 'warning',
         });
    }
    
    });
 }
</script>
<script>
function borrardatojornales(id){
     
    Swal.fire({
    title: 'Esta seguro?',
    text: "Se borrara el dato con id: " + id,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si,borrar!',
    cancelButtonText: 'No, cancelar!',
    }).then((result) => {
    if (result.isConfirmed){
            var datos  = {
               "id": id,
         };
         $.ajax({
            type: "POST",
            url:  "eliminarjornales.php",
            data: datos,
            success: function(r){
                if (r=="ok"){
                   Swal.fire({
                   title: 'Felicidades!',
                   text:'Se ha borrado el dato con exito',
                   icon: 'success',
                   confirmButtonText: 'OK!',
                   }).then((res)=> {
                       if (res.isConfirmed){
                           location.reload();
                       }
                   })
                }
            }
         });   
    }else {
         Swal.fire({
           title: 'Procesado!',
           text:'No se ha borrado el dato',
           icon: 'warning',
         });
    }
    
    });
 }
</script>
<script>
//borra datos de tabla trabajadores en pagina Totaltrabajadores
function borrartrabajador(id){
     
    Swal.fire({
    title: 'Esta seguro?',
    text: "Se borrara el dato con id: " + id,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si,borrar!',
    cancelButtonText: 'No, cancelar!',
    }).then((result) => {
    if (result.isConfirmed){
            var datos  = {
               "id": id,
         };
         $.ajax({
            type: "POST",
            url:  "eliminartrabajador.php",
            data: datos,
            success: function(r){
                if (r=="ok"){
                   Swal.fire({
                   title: 'Felicidades!',
                   text:'Se ha borrado el dato con exito',
                   icon: 'success',
                   confirmButtonText: 'OK!',
                   }).then((res)=> {
                       if (res.isConfirmed){
                           location.reload();
                       }
                   })
                }
            }
         });   
    }else {
         Swal.fire({
           title: 'Procesado!',
           text:'No se ha borrado el dato',
           icon: 'warning',
         });
    }
    
    });
 }
</script>

<script>
    function openmodalver(id){
        document.getElementById("hisprado").style.display = "none";
        document.getElementById("hisjornales").style.display = "none";
        document.getElementById("contratista").style.display = "block";
        var datos  = {
             "id": id,
         };
     $.ajax({
         
            type: "POST",
            url:  "trabajadorescons.php",
            data: datos,
            success: function(r){
                var datoss = JSON.parse(r);
                 var tablepago = $('#subcon').dataTable({
                     "language":{
                     "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                     },
                     "bAutoWidth" : false,
                     destroy: true,
                     "aaData" : datoss,
                     "columns" : [ 
                         { "data": "0" },
                         { "data": "3" },
                         { "data": "23" },
                         { "data": "25" },
                         { "data": "26" }
                         
                    ],
                    
               });
            }
     });
    }
    </script> 
    <script>
         //nuevo dato pago
    $(document).on("click","#btnp",function(){
        var datos = $('#snuevo4').serialize();
        $.ajax({
            type: "POST",
            url:  "agregarpago.php",
            data: datos,
            success: function(r){
                if(r=="error"){
                    Swal.fire({        
                    title: '¡Atención!',
                    text: 'Todos los campos son obligatorios', 
                    icon: 'error',
                     });
                }else{
                    Swal.fire({        
                    title: '¡Felicidades!',
                    text: 'Los datos fueron agregados con exito',
                    icon: 'success',
                     });
                     
                     location.reload();
                }
                
            }
            
        })
        return false;
    }); 
    </script>
              

<script>
function openmodalpago(id){
    $('#addpago').modal('show');
    
    document.getElementById("id4").value = id;
         
    }

</script>
<script>
function borrardatosubcon(id){
     
    Swal.fire({
    title: 'Esta seguro?',
    text: "Se borrara el dato con id: " + id,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si,borrar!',
    cancelButtonText: 'No, cancelar!',
    }).then((result) => {
    if (result.isConfirmed){
            var datos  = {
               "id": id,
         };
         $.ajax({
            type: "POST",
            url:  "eliminarsubcon.php",
            data: datos,
            success: function(r){
                if (r=="ok"){
                   Swal.fire({
                   title: 'Felicidades!',
                   text:'Se ha borrado el dato con exito',
                   icon: 'success',
                   confirmButtonText: 'OK!',
                   }).then((res)=> {
                       if (res.isConfirmed){
                           location.reload();
                       }
                   })
                }
            }
         });   
    }else {
         Swal.fire({
           title: 'Procesado!',
           text:'No se ha borrado el dato',
           icon: 'warning',
         });
    }
    
    });
 }
</script>
    
    
   
        <!-- Google analytics script-->
    </body>
</html>