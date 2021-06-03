<link href="css/sb-admin-2.css" rel="stylesheet">  
<div class="container-fluid">
    <!-- Cabecera -->
    <h1 class="h3 mb-2 text-gray-800">Buscar, Actualizar y Borrar usuarios</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>
    <!-- Tabla de usuarios -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de usuarios</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Primer Nombre</th>
                                <th>Segundo Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tr>
                            <td>1</td>
                            <td>Rodrigo</td>
                            <td>Alejandro</td>
                            <td>Vasquez Osorio</td>
                            <td>alejandro@gmail.com</td>
                            <td>Alejo1722</td>
                            <td>afeo5dekape5</td>
                            <td>Contador</td>
                            <td>
                                <i class="fas fa-copy detalle"></i>
                                <i class="fas fa-eye-slash habilitar"></i>
                                <i class="fas fa-cogs configurar"></i>
                                <i class="fas fa-window-close eliminar"></i>
                            </td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td>Luis</td>
                            <td>Fernando</td>
                            <td>Gomez Meza</td>
                            <td>ifgomezmeza@gmail.com</td>
                            <td>fernando1722</td>
                            <td>afeo5dekape5</td>
                            <td>Admin</td>
                            <td>
                                <i class="fas fa-copy detalle"></i>
                                <i class="fas fa-eye-slash habilitar"></i>
                                <i class="fas fa-cogs configurar"></i>
                                <i class="fas fa-window-close eliminar"></i>
                            </td>
                        </tr>                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 <!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
