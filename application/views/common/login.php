<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
    
    <head>
        <title>Investigación Unihorizonte</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/w3.css")?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/w3-theme-indigo.css")?>">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

        <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>">

        <!-- jquery -->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        
        <script>
            
            localStorage.setItem('live', "0");
            
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
            
            if (navigator.userAgent.indexOf('MSIE') !=-1) {
                window.location = "<?php echo base_url() ?>";
            } else if (navigator.userAgent.indexOf('Firefox') !=-1) {
                window.location = "<?php echo base_url() ?>";
            } else if (navigator.userAgent.indexOf('Opera') !=-1) {
                window.location = "<?php echo base_url() ?>";
            } 
            
        </script>
        
        <noscript>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br/>
                        <center><p><span class="btn btn-warning glyphicon glyphicon-alert"></span> Este sitio requiere JavaScript.</p></center>
                        <meta http-equiv="refresh" content="0; url=/<?php echo $b; ?>">
                    </div>
                </div>
            </div>
        </noscript>

    </head>
    
    <body>

        <div class="w3-container">

            <br/>

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                    <img src="<?php echo base_url("assets/images/logo-unihorizonte.jpg") ?>" alt="Logo unihorizonte" class="w3-margin-top w3-image w3-padding">
                </div>

                <form id="login-form" class="w3-container" action="<?php echo base_url() ?>index.php/login/checklogin" role="form" method="post">
                    <div class="w3-section">
                        <label><b>Usuario</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="user_username" placeholder="<?php echo $this->lang->line('txt_user') ?>" required="" autofocus="">
                        <label><b>Contraseña</b></label>
                        <input class="w3-input w3-border" type="password"  min="3" name="user_password" placeholder="<?php echo $this->lang->line('txt_password') ?>" required="">
                        <p class="form-message"></p>
                        <button class="w3-button w3-block w3-theme w3-section w3-padding" type="submit"><?php echo $this->lang->line('txt_login') ?></button>
                    </div>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <span class="w3-right w3-padding w3-hide-small"><a href="https://www.unihorizonte.edu.co">UniHorizonte</a></span>
                </div>

            </div>
        </div>

    </body>

    <!-- <script src="<?php echo base_url("assets/js/login-script.js")?>"></script> -->

</html>