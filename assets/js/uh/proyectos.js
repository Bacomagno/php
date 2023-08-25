/*
 * HANDLING PROYECTOS
 */

// Define el orden y propiedades de las columnas de la tabla
var orderedColumns = [
    
    {name: 'id_proyecto', breakpoints: '', visible: false, filterable: true, sorted: true, direction: 'ASC', required:false},
    {name: 'nombre_proyecto', breakpoints: '', visible: true, filterable: true, required:true},
    {name: 'codigo_institucional_proyecto', breakpoints: 'xs sm', visible: true, filterable: true, required:true},
    {name: 'acto_administrativo', breakpoints: 'xs sm', visible: true, filterable: true, required:true},
    {name: 'grupo_colciencias', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'linea_investigacion_institucional', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'docente_lider', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'facultad', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'linea_facultad', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'programa_academico', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'linea_programa', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'presupuesto_asignado', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'propuesta_proyecto', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'producto_esperado', breakpoints: 'all', visible: true, filterable: true, required:true},
    {name: 'fecha_inicio', breakpoints: 'xs sm', visible: true, filterable: true, required:true},
    {name: 'fecha_final', breakpoints: 'xs sm', visible: true, filterable: true, required:false},
    {name: 'archivo_informe_final', breakpoints: '', visible: true, filterable: true, required:false},
    {name: 'presupuesto_ejecutado', breakpoints: 'all', visible: true, filterable: true, required:false},
    {name: 'estado', breakpoints: 'xs sm', visible: true, filterable: true, required:false},
    {name: 'detalle_estado', breakpoints: 'all', visible: true, filterable: true, required:false}
    
];

$(document).ready(function () {
    
    $.getScript(location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/assets/js/' + commonMode + '.js', function(){
        
        // AllowEdit Add, Edit, Copy, Delete
	initialize(true, true, true, true, true);
    });
    
});

// Always declare this function to do something before loading the table
function commonBeforeApi(){}

// Always declare this function to do something after loading the table
function commonAfterApi(){}