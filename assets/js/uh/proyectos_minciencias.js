/*
 * HANDLING PROYECTOS MINCIENCIAS
 */

var orderedColumns = [
    {name: 'id_proyecto_minciencias_lista', breakpoints: '', visible: false, filterable: false, type: 'number'},
    {name: 'id_minciencias_lista', breakpoints: '', visible: true, filterable: true, sorted: true, direction: 'ASC', required:true},
    {name: 'id_proyecto_lista', breakpoints: 'all', visible: false, filterable: true, required:true},
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