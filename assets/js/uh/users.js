/*
 * HANDLING USERS
 */

var orderedColumns = [
    {name: 'user_id', breakpoints: '', visible: false, filterable: false, type: 'number'},
    {name: 'user_name', breakpoints: '', visible: true, filterable: true, sorted: true, direction: 'ASC', required:true},
    {name: 'user_username', breakpoints: 'all', visible: true, filterable: false},
    {name: 'rol', breakpoints: 'all', visible: true, filterable: false},
    {name: 'user_email', breakpoints: 'xs sm', visible: true, filterable: true, type: 'email', required:true},
    /*{name: 'system_id', breakpoints: 'all', visible: true, filterable: false},*/
    {name: 'user_type_id', breakpoints: '', visible: true, filterable: true}
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