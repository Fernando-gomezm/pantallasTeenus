<link href="css/sb-admin-2.css" rel="stylesheet">  

<body class="bg-gradient-primary">
    <div class="container">
        <h1 class="h3 mb-2 text-gray-800">Registrar Actividaddes</h1>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">                          
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                <select class="form-control form-control-user" id="sel_tipoDocumento" 
                                        type="text" placeholder="Tipo de documento*">
                                        <option value="value1"selected>Nit</option>
                                        <option value="value2"selected>Cedula de ciudadania</option>
                                </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-user" id="txt-documento"
                                            placeholder="Documento*">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="txt-empresa"
                                            placeholder="Empresa*" required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="txt-email"
                                        placeholder="Email Address*" required="true">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user"
                                            id="txt-celular" placeholder="Celular*" required="true">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user"
                                            id="txt-direccion" placeholder="Dirección*"required="true" >
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user"
                                            id="txt-departamento" placeholder="Departamento*" required="true">
                                    </div>
                                </div>                             
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user"
                                            id="txt-municipio" placeholder="Municipio*" required="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 ">
                                        <a href="#" class="btn btn-primary btn-user btn-block">
                                            Nueva actividad
                                        </a>
                                    </div>                                                 
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <textarea class="form-control txt-comentarios" id="txt-repetir-password"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user"
                                        id="txt-costo" placeholder="Costo*" required="true"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-user" id="sel_tipoDocumento" 
                                        type="text" placeholder="Tipo de documento*">
                                            <option value="value1"selected>Paga</option>
                                            <option value="value2"selected>Pendidente</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-sm-4 ">
                                        <a href="#" class="btn btn-primary btn-user btn-block">
                                            Registrar actividad
                                        </a>
                                    </div>
                                </div>                                                                                                                     
                                </div> 
                                </div>
                                <hr>                                     
                            </form>                                                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>