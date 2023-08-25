<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$b = $this->config->base_url();
$b = explode("/", $b);
$b = $b[3];

?>
<!DOCTYPE html>
<html>
    
    
    <body>

        <div id="div_loading" class=""></div>
        <div id="div_spinner" class=""></div>
        
        <div class="w3-card w3-sidebar w3-collapse w3-white w3-animate-left w3-large" style="z-index:3;width:300px;" id="mySidebar">

            <div class="w3-bar w3-theme w3-center">
                <a class="w3-bar-item w3-button" style="width:33.33%" alt="Menú" onclick="openNav('nav01')">
                    <i class="fa fa-bars w3-xlarge"></i></a>
                <a class="w3-bar-item w3-button" style="width:33.33%" alt="Configuración" onclick="openNav('nav03')">
                    <i class="fa fa-cog w3-xlarge"></i></a>
                <a class="w3-bar-item w3-button" style="width:33.33%" alt="Perfil" onclick="openNav('nav02')">
                    <i class="fa fa-user-circle w3-xlarge"></i></a>
            </div>

            <div id="nav01" class="w3-bar-block">
                <a class="w3-button w3-hover-teal w3-hide-large w3-large w3-right" href="javascript:void(0)" onclick="w3_close()">×</a>
                <span class="w3-bar-item w3-border-bottom w3-large"><img src="<?php echo base_url("assets/images/logo-unihorizonte.jpg") ?>" style="width: inherit;"></span>
                <a class="w3-bar-item w3-button pagina-principal" onclick="loadContent('#content_selected', 'home')">Indicadores</a>
                <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'proyectos');">Proyectos</a>
            </div>

            <div id="nav02" class="w3-bar-block">
                <a class="w3-button w3-hover-teal w3-hide-large w3-large w3-right" href="javascript:void(0)" onclick="w3_close()">×</a>
                <div class="w3-container w3-border-bottom">
                    <h1 class="w3-text-theme"><?php print_r($this->session->userdata("name")) ?></h1>
                </div>
                <a class="w3-bar-item w3-button" onclick="cargarPagina('mi-cuenta')">Mi cuenta</a>
                <a class="w3-bar-item w3-button" onclick="document.getElementById('id01').style.display='block'" >Salir</a>
                
            </div>

            <div id="nav03" class="w3-bar-block">
                <a class="w3-button w3-hover-teal w3-hide-large w3-large w3-right" href="javascript:void(0)" onclick="w3_close()">×</a>
                <div class="w3-container w3-border-bottom">
                    <h1 class="w3-text-theme">Configurar</h1>
                </div>
                <ul class="w3-ul w3-large">
                    
                    <div class="w3-bar-item w3-button" onclick="myAccFunc('demoAcc1')">
                    Universidad <i class="fa fa-caret-down"></i></div>
                    <div id="demoAcc1" class="w3-hide w3-white w3-card-4">
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'estudiantes');">Estudiantes</a>
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'grupos_colciencias_lista');">Grupos colciencias</a>
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'lineas_institucionales_lista');">Lineas institucionales</a>
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'productos_lista_colciencias');">Productos colciencias</a>

                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'facultades_lista');">Facultades</a>
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'lineas_facultad_lista');">Líneas por facultad</a>
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'programa_academico_lista');">Programa académico</a>
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'lineas_por_programa');">Líneas por programa</a>
                    </div>
                    
                    <div class="w3-bar-item w3-button" onclick="myAccFunc('demoAcc2')">
                    Parámetros <i class="fa fa-caret-down"></i></div>
                    <div id="demoAcc2" class="w3-hide w3-white w3-card-4">
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'users');">Usuarios</a>
                        <a class="w3-bar-item w3-button" onclick="loadContent('#content_selected', 'roles_lista');">Roles</a>
                    </div>
                    
                </ul>
            </div>
        </div>

        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

        <br class="w3-hide-large"/><br class="w3-hide-large"/>

        <div class="w3-main" style="margin-left:300px;"> 

            <div class="w3-top w3-theme w3-large w3-hide-large">
                <i class="fa fa-bars w3-button w3-theme w3-xlarge" onclick="w3_open()"></i>
            </div>

            <!--<header class="w3-container w3-theme w3-padding-64 w3-center">
                <h1 class="w3-xxlarge">GESTIÓN DE PROYECTOS DE INVESTIGACIÓN APLICADA Y FORMATIVA</h1>
            </header>-->

            <header class="w3-container w3-theme">

            </header>
            
            <!-- inicio del contenido -->
                                
            <div id="content_selected">

                <!--<div class="jumbotron">
                    <h1>Contenido del dash...</h1>
                    <p>Vaya a inicio.</p>
                </div>-->

            </div>

            <!-- Modal -->
            <div class="modal fade" id="aux_modal" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                    <div id="aux_modal_content" class="modal-body">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default txt_close" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- fin del contenido-->
            
            <div id="div-contenido"></div>
            
            <div id="div-editor" style="display: none"></div>
            
            <div id="div-editor-2" style="display: none"></div>

            <!--<footer class="w3-container w3-margin w3-card w3-light-grey w3-justify w3-opacity w3-display-bottomright">
                <p><nav>
                    <a>AYUDA</a> |
                    <a>ACERCA DE</a>
                </nav></p>
            </footer>-->

        </div>
        
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-animate-opacity w3-card-4" style="width: 25%;">
                <header class="w3-container w3-theme"> 
                    <span onclick="document.getElementById('id01').style.display='none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>¿Salir?</h2>
                </header>
                <div class="w3-container w3-padding">
                    <!--<a class="w3-btn w3-theme" href="<?php echo base_url("index.php/validar/cerrarsesion")?>">Si</a>
                    <a class="w3-btn w3-theme" onclick="document.getElementById('id01').style.display='none'">No</a>
                    -->
                    <a class="w3-bar-item w3-button w3-red" href="<?php echo base_url() ?>index.php/main/logout" style="width:48%">Si</a>
                    <a class="w3-bar-item w3-button w3-theme" onclick="document.getElementById('id01').style.display='none'" style="width:48%">No</a>
                    
                </div>
            </div>
        </div>
        
        <div id="id02" class="w3-modal"></div>
    
        <script>
            
            $(document).ready(function(){
                $("a.pagina-principal").click();
            });
            
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            openNav("nav01");
            
            function openNav(id) {
                document.getElementById("nav01").style.display = "none";
                document.getElementById("nav02").style.display = "none";
                document.getElementById("nav03").style.display = "none";
                document.getElementById(id).style.display = "block";
            }
            
            function myAccFunc(selector) {
                var x = document.getElementById(selector);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                    x.previousElementSibling.className += " w3-green";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                    x.previousElementSibling.className = 
                    x.previousElementSibling.className.replace(" w3-green", "");
                }
            }
            
        </script>

        <script src="<?php echo base_url("assets/js/cuerpo-script.js")?>"></script>
        <script src="<?php echo base_url("assets/js/w3codecolor.js")?>"></script>

        <script>
            w3CodeColor();
        </script>

    </body>
    
    <script>
                
    $(document).ready(function(){
        switch_lang_ajax("spanish");
        $("span.title_home").parent().click();                    
    });

    </script>
    