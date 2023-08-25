<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Bienvenido</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- jquery -->
        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>"/>
        <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

        <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>"/>

        <script>

            if (navigator.userAgent.indexOf('Chrome') != -1) {
                window.location = "<?php echo base_url() . "index.php/login" ?>";
            } else if (navigator.userAgent.indexOf('MSIE') != -1) {
                var dry = 'Está usando Internet Explorer ...';
            } else if (navigator.userAgent.indexOf('Firefox') != -1) {
                var dry = 'Está usando Firefox ...';
            } else if (navigator.userAgent.indexOf('Opera') != -1) {
                var dry = 'Está usando Opera ...';
            } else {
                var dry = 'Está usando un navegador no identificado ...';
            }
            
            if(dry !== undefined){
                document.write('Este sistema está optimizado para <a href=\'https://www.google.es/chrome/browser/desktop/index.html\'>Google Chrome</a>:<br>' + dry);
            }
            

        </script>

        <noscript>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br/>
                        <center><p><span class="btn btn-warning glyphicon glyphicon-alert"></span> Este sitio requiere JavaScript.</p></center>
                    </div>
                </div>
            </div>
        </noscript>
        
    </head>
    <body>

    </body>
</html>