<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="w3-container w3-margin w3-card w3-section w3-light-grey w3-animate-bottom">
    
    <h1 class="w3-xxlarge w3-text-theme avances">Documentos soporte</h1>
    
    <table id="t1" class="w3-table-all w3-margin-top w3-hoverable"></table>
    
    <br/>
</div>

<script>
    // Creates the table id automatically in order to allow common-api.js
    // to create the tables in the correct table
    
    var timer1 = setInterval(function () {
        try{
            if(window["ft_" + "avances"].initialized){
                
                var ejecutado = 0;
                
                for(i in ft_avances.o.rows){
                    ejecutado += Number(ft_avances.o.rows[i]["presupuesto_ejecutado"]);
                }
                
                $("form#proyectos input[name='presupuesto_ejecutado']").val(ejecutado);
                
                clearInterval(timer1);
            }
        }catch(e){
            console.log($(e));
            //clearInterval(timer1);
        }
    }, 100*5);
    
    $("table#t1").attr("id", "table_" + current);
</script>