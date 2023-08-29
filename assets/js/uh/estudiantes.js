/*
 * HANDLING ESTUDIANTES
 */

var orderedColumns = [
    
    {name: 'id_estudiante', breakpoints: '', visible: false, filterable: true, sorted: true, direction: 'ASC', required:false},
    {name: 'nombres_estudiante', breakpoints: '', visible: true, filterable: true, required:true},
    {name: 'documento_estudiante', breakpoints: '', visible: true, filterable: true, required:true},
    
];

$(document).ready(function () {

    // $.getScript(location.protocol + '//' + location.host + '/' + '/assets/js' + commonMode + '.js', function () {
    // $.getScript(location.protocol + '//' + location.host + '/' + 'index.php' + '/assets/js' + commonMode + '.js', function () {
    $.getScript(location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/assets/js/' + commonMode + '.js', function(){
        
        // AllowEdit Add, Edit, Copy, Delete
        initialize(true, true, true, true, true);
    });
    
});

// Always declare this function to do something before loading the table
function commonBefore(){}

// Always declare this function to do something after loading the table
function commonAfter(){}