/*
 * HANDLING GRUPOS COLCIENCIAS
 */

var orderedColumns = [
    {name: 'id_grupo', breakpoints: '', visible: false, filterable: false, type: 'number'},
    {name: 'nombre_grupo', breakpoints: '', visible: true, filterable: true, sorted: true, direction: 'ASC', required:true},
    {name: 'lider_grupo', breakpoints: '', visible: true, filterable: true, sorted: true, direction: 'ASC', required:true},
    {name: 'codigo_grupo', breakpoints: '', visible: true, filterable: true, sorted: true, direction: 'ASC', required:true},
    {name: 'categoria_grupo', breakpoints: '', visible: true, filterable: true, sorted: true, direction: 'ASC', required:true},
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