<link href="css/sb-admin-2.css" rel="stylesheet">  

<body class="bg-gradient-primary">
    <div class="container">
        <h1 class="h3 mb-2 text-gray-800">Registrar usuarios</h1>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">                          
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="txt-primer-nombre"
                                            placeholder="Primer Nombre" required="true">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-user" id="txt-segundo-nombre"
                                            placeholder="Segundo Nombre">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="txt-apellidos"
                                            placeholder="Apellidos" required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="txt-email"
                                        placeholder="Email Address" required="true">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user"
                                            id="txt-usuario" placeholder="Usuario" required="true">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control form-control-user"
                                            id="txt-password" placeholder="Contraseña"required="true" >
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control form-control-user"
                                            id="txt-repetir-password" placeholder="Confirmar contraseña" required="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-user" id="select-rol" required="true">
                                            <option class="form-control form-control-user">Admin</option>
                                        </select>
                                    </div>                                  
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Comentarios: </label>
                                        <textarea class="form-control txt-comentarios" id="txt-repetir-password"></textarea>
                                    </div>                                               
                                </div> 
                                <div class="form-group">
                                    <div class="col-sm-4 ">
                                        <a href="#" class="btn btn-primary btn-user btn-block">
                                            Registrar usuario
                                        </a>
                                    </div>                                                 
                                </div>                                      
                            </form>                                                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>