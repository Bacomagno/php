/*
 * HANDLING PRODUCTOS
 */

var orderedColumns = [
    
    {name: 'id_producto', breakpoints: '', visible: false, filterable: true, sorted: true, direction: 'ASC', required:false},
    {name: 'proyecto', breakpoints: '', visible: false, filterable: true, required:true},
    {name: 'producto_colciencias', breakpoints: '', visible: true, filterable: true, required:true},
    {name: 'archivo_producto', breakpoints: 'all', visible: true, filterable: true, required:false},
    
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