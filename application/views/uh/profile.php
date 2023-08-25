<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">

    <div id="" class="col-sm-12">

        <div class="modal-content">
            <div style="padding: 15px 30px 15px 30px;" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="text-transform: uppercase"><i id="modal_icon" aria-hidden="true" style="color: #003366; margin-right: 10px" class="fa fa fa-user-circle">
                            </i>
                            <span id="modal_title"><span id="editor_username"></span>
                            </span></h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <form id="editor-profile" class="form-horizontal">
                        <div class="col-md-12 custom-1">
                            <div class="custom-2">
                                <input type="hidden" id="user_id" name="user_id">
                                <div class="form-group">
                                    <label class="control-label col-sm-2">
                                        <span class="user_name">Usuario</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control user_name" name="user_name" id="user_name" placeholder="Usuario" required="" value="" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">
                                        <span class="user_email">Email</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control user_email" name="user_email" id="user_email" placeholder="Email" required="" value="" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">
                                        <span class="user_password">Contraseña</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input onblur="prueba(this)" onmouseover="this.type = 'text'" onmouseout="this.type = 'password'" type="password" class="form-control user_password" name="" id="user_password" placeholder="Contraseña">
                                    </div>
                                </div>
                                <div class="col-md-12 pull-right">
                                    <div class="row">
                                        <hr>
                                        <span class="pull-right">&nbsp;</span>
                                        <a onclick="update()" id="submit" class="btn btn-success pull-right txt_save">Guardar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    
</div>

<script>
    // Creates the table id automatically in order to allow common-api.js
    // to create the tables in the correct table
    $("table#t1").attr("id", "table_" + current);
</script>