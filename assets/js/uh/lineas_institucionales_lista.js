/*
 * HANDLING LINEAS INSTITUCIONALES
 */

var orderedColumns = [
    {name: 'id_linea_institucional_lista', breakpoints: '', visible: false, filterable: false, type: 'number'},
    {name: 'nombre_linea_institucional', breakpoints: '', visible: true, filterable: true, sorted: true, direction: 'ASC', required:true},
    {name: 'descripcion', breakpoints: '', visible: true, filterable: true, required:true},
];

$(document).ready(function () {
    
    $.getScript(location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/assets/js/' + commonMode + '.js', function(){
        
        // AllowEdit Add, Edit, Copy, Delete
        initialize(true, true, true, true, true);
    });
    
});

// Always declare this function to do something before loading the table
function commonBefore(){}

// Always declare this function to do something after loading the table
function commonAfter(){}