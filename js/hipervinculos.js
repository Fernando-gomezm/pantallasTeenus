$(document).ready(function(){
    $('.buscar-usuario').click(function(){
        $('#container-fluid').load("buscarUsuarios.php"); 
    });
    $('.buscar-proyecto').click(function(){
        $('#container-fluid').load("buscarProyectos.php"); 
    }); 
    $('.registrar-usuario').click(function(){
        $('#container-fluid').load("registroUsuarios.php"); 
    });
    $('.registrar-proyecto').click(function(){
        $('#container-fluid').load("registroProyectos.php"); 
    }); 
}); 