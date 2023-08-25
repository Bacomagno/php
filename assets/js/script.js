/*
 * COMMON FUNCTIONS
 */

// Establece que se debe usar el api para obtener la información.
var commonMode = "common_api";
// Profundidad para los editores que se vayan creando empezando en 100 y sumando + 1
var depth = 100;
// Pila de los editores abiertos, en caso de usarse más de uno
var editor_stack = [];
// Pila de los id de editores abiertos
var editor_id_stack = [];
// Indica si hay bloqueo de algún registro porque se está editando o borrando
var locks_stack = [];

// Disable Dev Tools Access
if(localStorage.getItem('live') == "1"){
    
    $(document).keydown(function (event) {
    
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
            return false;
        } else if (event.ctrlKey && event.keyCode == 85) { // Prevent Ctrl+U        
            return false;
        }
    });

    // Disable right click menu
    $(document).on("contextmenu", function (e) {        
        e.preventDefault();
    }); 
    
}
    
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    
    $('li').on('click', function () {
        $('li').removeAttr('class');
        $(this).toggleClass('active');
    });

});

function switch_lang_ajax(lang) {
    
    var datosEnviados = {
        'lang': lang
    }
    
    $.ajax({
        type: 'POST',
        url: location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/index.php/main/setlang',
        data: datosEnviados,
        dataType: 'json',
        encode: true
    }).done(function (datos) {
        for(info in datos.language){
            $('.' + info).each(function(){
                if($(this).is('input') || $(this).is('textarea')){
                    $(this).attr("placeholder", datos.language[info]);
                }else{
                    $(this).html(datos.language[info]);
                }
            });

        }
        
        window.globalLang = lang;
        window.langStrings = datos.language;
        
    });
}

/*
 * This method loads the given content (what) into the given div id (where_id)
 * 
 * @param {string} where_id         The place to put the loaded content.
 * @param {string} what             What to load into "where_id" div.
 * @param {string} query            If something is set, it will filter by that 
 *                                  criteria (if the field exists in the given table).
 * @returns {noting}                This method does not return anything.
 */

function loadContent(where_id, what, query = "") {
    
    window.extra_info = query;
    
    // Avoid loading itself into the #content_selected div when the url has the
    // '#' symbol at the end
    if(location.href.indexOf("#") >= 0){
        location.href = location.href.replace("#", "");
    }
    
    // Solo se usará para asignar nombres a las tablas que se creen es una 
    // variable libre que se carga dinámicamente para que cada elemento creado 
    // sea independiente.
    window.current = what;
    
    // Establecer una url base fija
    var url = location.href.split("/");
    url = url[0] + "/" + url[1] + "/" + url[2] + "/" + url[3] + "/" + url[4] + "/" + url[5] + "/" + url[6] + "/";
    
    // Load the information into the div with the given id into "where_id"
    $(where_id).load(url + "get/" +  what, function (result, status, xhr) {
        
        if (status === 'error') {
            alert(status + ": " + xhr.status + " (" + xhr.statusText + ")");
        }else{
            
            // Load the script related to the component given in "what"
            $.getScript(location.origin + '/' + location.pathname.split("/")[1] + '/assets/js/' + whereAmI + '/' + what + '.js', function () {});
        }
        
    });

}

/*
 * Esta funcion permite cargar contenido filtrado para alguna tabla si es necesario
 * actualmente se usa en "users" para mostrar solo los resultados del sistema actual
 * 
 * @param {string}  where_id        The place to put the loaded content
 * @param {string}  what            What to load into "where_id" div
 * @param {type}    remote          remoto se usa para la tabla remota que tienee asociado el recurso que queremos cargar
 * @param {type}    id              el id de la tabla remota que queremos filtrar
 * @returns {undefined}
 */
function loadFilteredContent(where_id, what, remote = "", id = ""){
    
    // Establece el stack previamente para poder mostrar la inforamción
    editor_stack[0] = remote;
    editor_id_stack[0] = Number(id);
    
    // Usa la función loadContent para cargar normalmente el contenido filtrado
    // como cuando se va a editar
    loadContent(where_id, what, remote);
    
    // Establece este flag/bandera para indicar al common_api que al terminar de
    // cargar la tabla debe borrar el contenido del editor_stack
    window.loadedFilteredContent = 1;
    
}

function toggleIcon(){
    var x = document.getElementById("sidebar").getAttribute("class");
    if("active" === x){
        document.getElementById('sidebarCollapseIcon').className = "fa fa-caret-square-o-right";
    }else{
        document.getElementById('sidebarCollapseIcon').className = "fa fa-caret-square-o-left";
    }
    
}

function getCurrentWord(word){
    // Find the required word using loaded strings
    if(langStrings[word] !== undefined){
        return langStrings[word];
    }else{
        return 'Translation not found (' + word + ')';
    }
    
}

/*
 * Find a simple text y a simple/unidimensional array (n)
 * 
 * @argument {mixed} name       : what to find
 * @argument {array} array      : the given array
 * @argument {string} type      : type of data to find [string | number] - default: string
 * 
 */
function ifInArray(find, array, type = "string"){
    
    if(type === "string"){
        find = find.toString();
    }
    
    if(type === "number"){
        find = Number(find);
    }
    
    found = false;
    for(indx in array){
        if(array[indx] === find){
            found = true;
            break;
        }
    }
    return found;
}

function today() {
    var now = new Date();
    var month = (now.getMonth() + 1);
    var day = now.getDate();
    if (month < 10)
        month = "0" + month;
    if (day < 10)
        day = "0" + day;
    var today = now.getFullYear() + '-' + month + '-' + day;
    return today;
}

// This script is released to the public domain and may be used, modified and
// distributed without restrictions. Attribution not necessary but appreciated.
// Source: https://weeknumber.net/how-to/javascript

// Returns the ISO week of the date.
Date.prototype.getWeek = function() {
  var date = new Date(this.getTime());
  date.setHours(0, 0, 0, 0);
  // Thursday in current week decides the year.
  date.setDate(date.getDate() + 3 - (date.getDay() + 6) % 7);
  // January 4 is always in week 1.
  var week1 = new Date(date.getFullYear(), 0, 4);
  // Adjust to Thursday in week 1 and count number of weeks from date to week1.
  return 1 + Math.round(((date.getTime() - week1.getTime()) / 86400000
                        - 3 + (week1.getDay() + 6) % 7) / 7);
}

// Returns the four-digit year corresponding to the ISO week of the date.
Date.prototype.getWeekYear = function() {
  var date = new Date(this.getTime());
  date.setDate(date.getDate() + 3 - (date.getDay() + 6) % 7);
  return date.getFullYear();
}


Date.prototype.getMonthNumber = function(w, y) {
    var d = (1 + (w - 1) * 7); // calcula el numero de dias a partir del 1 de enero
    var fecha = new Date(y, 0, d);
    return fecha.getMonth() + 1;
};

// Agrega la función addDays al objeto Date para agregar los días necesarios.
Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}

// Quitar el loader
function remove_loader() {
    $("#div_loading").removeClass("background-loading");
    $("#div_spinner").removeClass("spinner-loading");

}

// Mostrar el loader
function show_loader() {
    $("#div_loading").addClass("background-loading");
    $("#div_spinner").addClass("spinner-loading");
}