<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$arr_productos = array();
$arr_productos_total = array();
$total_productos = sizeof($productos);

foreach ($productos as $value) {
    
    if(!in_array($value['nombre_tipo_producto'], $arr_productos)){
        
        array_push($arr_productos, $value['nombre_tipo_producto']);
        
        $arr_productos_total[$value['nombre_tipo_producto']] = 1;
        
    }else{
    
        $arr_productos_total[$value['nombre_tipo_producto']] += 1;
        
    }
    
}

$arr_proyectos = array();
$arr_proyectos_total = array();
$total_proyectos = sizeof($estado_proyectos);

foreach ($estado_proyectos as $value) {
    
    if(!in_array($value['nombre_estado'], $arr_proyectos)){
        
        array_push($arr_proyectos, $value['nombre_estado']);
        
        $arr_proyectos_total[$value['nombre_estado']] = 1;
        
    }else{
    
        $arr_proyectos_total[$value['nombre_estado']] += 1;
        
    }
    
}

$arr_proyectos_anual = array();
$arr_proyectos_total_anual = array();

$arr_proyectos_anual_f = array();
$arr_proyectos_total_anual_f = array();

foreach ($proyectos_anual as $value) {
    
    $a = explode('-', $value['fecha_inicio'])[0];
    $f = explode('-', $value['fecha_final'])[0];
    
    if(intval($a) > 0){

        // Agrega los proyectos iniciados
        if(!in_array($a, $arr_proyectos_anual)){

            array_push($arr_proyectos_anual, $a);

            $arr_proyectos_total_anual[$a] = 1;

        }else{

            $arr_proyectos_total_anual[$a] += 1;
            
        }

    }
    
    if(intval($f) > 0){

        // Agrega los proyectos iniciados
        if(!in_array($f, $arr_proyectos_anual_f)){

            array_push($arr_proyectos_anual_f, $f);

            $arr_proyectos_total_anual_f[$f] = 1;

        }else{

            $arr_proyectos_total_anual_f[$f] += 1;
            
        }

    }
    
}

//print_r($productos);
//print_r($arr_productos);
//print_r($arr_productos_total);
//print_r($estado_proyectos);
//print_r($arr_proyectos);
//print_r($arr_proyectos_total);
//print_r($proyectos_anual);
//print_r($arr_proyectos_anual);
//print_r($arr_proyectos_total_anual);
//print_r($arr_proyectos_anual_f);
//print_r($arr_proyectos_total_anual_f);

?>

<div class="w3-container w3-margin w3-card w3-section w3-light-grey w3-animate-bottom">
    <h1 class="w3-xxlarge w3-text-theme">Indicadores Jhon si</h1>
    <!--<h2>Grupos UH</h2>-->

    <div class="w3-container">

        <div class="w3-row">
            <div class="w3-half w3-container">
                <div class="w3-card" id="bar_chart_div" style="width: 100%; height: 500px;"></div>
            </div>
            <div class="w3-half w3-container">
                <div class="w3-card" id="donutchart" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
        
        <br/>
        
        <div class="w3-row">
            <div class="w3-container">
                <div class="w3-card" id="chart_div" style="width: 100%; height: 500px;"></div>
            </div>
            
        </div>
        
        <br/>
        
    </div>
    <br/>
    
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    
    // PIE CHART
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Producto', 'Cantidad'],
      
    <?php
    foreach ($arr_productos as $value) {

        echo "['" . $value . "',     " . $arr_productos_total[$value] . "],\n";
    }
    ?>
    ]);

    var options = {
      title: 'Productos: <?php echo $total_productos ?>',
      pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  
  
  // BAR CHART
    
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawStacked);

    function drawStacked() {
      var data = google.visualization.arrayToDataTable([
        ['Estado', 'Cantidad'],
        
    <?php
    foreach ($arr_proyectos as $value) {

        echo "['" . $value . "',     " . $arr_proyectos_total[$value] . "],\n";
    }
    ?>
        
      ]);

      var options = {
        title: 'Proyectos: <?php echo $total_proyectos ?>',
        //chartArea: {width: '50%'},
        isStacked: true,
        hAxis: {
          title: 'Total',
          minValue: 0,
        },
        vAxis: {
          title: 'Estado'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
      chart.draw(data, options);
    }
    
    // AREA CHART
    
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Año', 'Iniciados', 'Terminados'],
          
          <?php
          
            foreach ($arr_proyectos_anual as $value) {
                
                if(in_array($value, $arr_proyectos_anual_f)){
                    $pf = $arr_proyectos_total_anual_f[$value];
                }else{
                    $pf = 0;
                }
                
                echo "['" . $value . " (" . (intval($arr_proyectos_total_anual[$value]) + intval($pf)) . ")" . "',     " . $arr_proyectos_total_anual[$value] . ", " . $pf . "],\n";
            }
            
          
          ?>
          
        ]);

        var options = {
          title: 'Proyectos por año',
          hAxis: {title: 'Año',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      
      
    }
  
</script>