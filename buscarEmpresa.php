<link href="css/sb-admin-2.css" rel="stylesheet">  
<div class="container-fluid">
    <!-- Cabecera -->
    <h1 class="h3 mb-2 text-gray-800">Buscar, Actualizar y inactiva o activa empresas</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>
    <!-- Tabla de usuarios -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de empresas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo de documento</th>
                            <th>Documento</th>
                            <th>Empresa</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Dirección</th>
                            <th>Departamento</th>
                            <th>Municipio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                        <tfoot>
                            <tr>
                            <th>ID</th>
                            <th>Tipo de documento</th>
                            <th>Documento</th>
                            <th>Empresa</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Dirección</th>
                            <th>Departamento</th>
                            <th>Municipio</th>
                            <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tr>
                            <td>1</td>
                            <td>Nit</td>
                            <td>237679394</td>
                            <td>ANGOMA S.A.S</td>
                            <td>antoniogm30@gmail.com</td>
                            <td>3124637845</td>
                            <td>Cra. 21 #46-45</td>
                            <td>Cundinamarca</td>
                            <td>Manta</td>
                            <td>
                                <i class="fas fa-copy detalle"></i>
                                <i class="fas fa-eye-slash habilitar"></i>
                                <i class="fas fa-cogs configurar"></i>
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
