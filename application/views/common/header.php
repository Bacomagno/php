<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$b = $this->config->base_url();
$b = explode("/", $b);
$b = $b[3];
?>
        
<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php echo $sysname ?></title>

        
        <title>Innovación Unihorizonte</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/w3.css")?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/w3-theme-indigo.css")?>">
        <!--<link rel="stylesheet" href="<?php echo base_url("assets/css/select2.css")?>">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    
        <!-- jquery -->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/w3.js')?>"></script>
        <!--<script src="<?php echo base_url('assets/js/select2.js')?>"></script>-->
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
        <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
        
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
        
        <!-- FontAwesome script (Modified Script to replace headx by head to work normally offline) -->
        <!--<script src="<?php echo base_url('assets/js/font-awesome.js')?>"></script> -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css')?>">
        
        <!-- Script System -->
        <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
        
        <!-- Foo Tables -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/footable.bootstrap.css') ?>"/>
        <script src="<?php echo base_url('assets/js/footable.js') ?>"></script>
        
        <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>">
        
        <script>
            
            whereAmI = '<?php echo $this->session->userdata('folder') ?>';
            
            var ui = '<?php echo $_SESSION['ui'] ?>';
            var un = '<?php echo $_SESSION['name'] ?>';
            
            switch_lang_ajax('<?php echo $_SESSION['language'] ?>');
        </script>
        
        <!-- Bootstrap-select -->
        <link href='<?php echo base_url('assets/css/bootstrap-select.css') ?>' rel='stylesheet'/>        
        <script src='<?php echo base_url('assets/js/bootstrap-select.js') ?>'></script>
        <script src='<?php echo base_url('assets/js/i18n/defaults-es_ES.js') ?>'></script>
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
    </head>
    
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