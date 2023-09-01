/*
*HANDLING PRUEBAS
*/

var orderedColumns = [
    {name: 'id_prueba', breakpoints: '', visible: false, filterable: false, type: 'number'},
    {name: 'nombre', breakpoints: '', visible: true, filterable: true, sorted:true, direction: 'ASC', required: true},
    {name: 'descripcion', breakpoints: '', visible: true, filterable: false, required: true},
];

$(document).ready(function () {

    $.getScript(location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/assets/js/' + commonMode + '.js', function() {

        initialize(true, true, true, true, true);
    });
});

function commonBefore() {}

function commonAfter() {}