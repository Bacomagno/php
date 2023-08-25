/*
 * HANDLING PROGRAMA ACADEMICO
 */

var orderedColumns = [
    {name: 'id_programa_academico', breakpoints: '', visible: false, filterable: false, type: 'number'},
    {name: 'nombre_programa_academico', breakpoints: '', visible: true, filterable: true, sorted: true, direction: 'ASC', required:true},
    {name: 'codificacion', breakpoints: '', visible: true, filterable: false, required:true},
    {name: 'linea_facultad', breakpoints: '', visible: true, filterable: false, required:true},
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