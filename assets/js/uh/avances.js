/*
 * HANDLING AVANCES
 */

var orderedColumns = [
    
    {name: 'id_avance', breakpoints: '', visible: false, filterable: true, sorted: true, direction: 'ASC', required:false},
    {name: 'nombre_avance', breakpoints: '', visible: true, filterable: true, required:true},
    {name: 'id_proyecto', breakpoints: 'all', visible: false, filterable: true, required:true},
    {name: 'presupuesto_ejecutado', breakpoints: '', visible: true, filterable: true, required:true},
    {name: 'fecha_entrega', breakpoints: '', visible: true, filterable: true, required:true},
    {name: 'tipo_documento', breakpoints: '', visible: true, filterable: true, required:true},
    {name: 'archivo_proyecto', breakpoints: '', visible: true, filterable: true, required:false},  
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