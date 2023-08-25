/*
 * Cuerpo Script
 */

var datos;

/*
 * Crea una tabla dada con las columnas enviadas y las filas que estan guardadas
 * en la variable datos
 *
 * El primer elemento debe ser el identificador
 *
 */

function cargarPagina(pagina = ""){
    
    console.log("Triggered cargarPagina()");
    
}

function funcCerrarModal(modal){
    
    // Oculta cualquier editor previamente cargado
    $("#div-editor").css("display", "none");

    // Muestra el contenido del modulo normalmente
    $("#div-contenido").css("display", "");
    
    $("#" + modal).css("display", "none");
    
}