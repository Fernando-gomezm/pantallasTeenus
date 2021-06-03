<link href="css/sb-admin-2.css" rel="stylesheet">  

<body class="bg-gradient-primary">
    <div class="container">
        <h1 class="h3 mb-2 text-gray-800">Registrar Proyectos</h1>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">                          
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-user" id="txt-nombre-proyecto"
                                            placeholder="Nombre del proyecto" required="true">
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-user" id="txt-costo"
                                            placeholder="Costo" required="true">
                                    </div>
                                </div>                           
                                <div class="form-group row">
                                    <div class="col-sm-4">                                       
                                        <select class="form-control form-control-user" id="select-empresa" required="true">
                                            <option class="form-control form-control-user">Teenus</option>
                                            <option class="form-control form-control-user">Teenus 2</option>
                                        </select>
                                    </div>                                  
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                    <label>Fecha de inicio: </label>
                                        <input type="date" class="form-control form-control-user"
                                            id="txt-fecha-Ini" required="true" >
                                    </div>
                                    <div class="col-sm-3">
                                        <label>Fecha de entrega: </label>
                                        <input type="date" class="form-control form-control-user "
                                            id="txt-fecha-Ent" required="true">         
                                    </div>

                                </div>                         
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Descripción del proyecto: </label>
                                        <textarea class="form-control txt-comentarios" id="txt-descripcion-pro"></textarea>
                                    </div>                                               
                                </div> 
                                <div class="form-group">
                                    <div class="col-sm-4 ">
                                        <a href="#" class="btn btn-primary btn-user btn-block">
                                            Registrar Proyecto
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