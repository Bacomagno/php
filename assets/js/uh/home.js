/* 
 * Para iniciar varios componentes debe inicialiar uno primero como se muestra 
 * en // Primero, luego inicializar un timer para el // Segundo y los demás que 
 * se requieran.
 * 
 * Debe tener en cuenta que las variables timer deben ser diferentes unas de las 
 * otras. Ej: var timer1..., var timer2..., etc.
 * 
 * Tener en cuneta que el if del timer actual debe apuntar a la tabla que se ha
 * cargado previamente, en este documento para cargar "tom_actuaciones" se 
 * verifica que "tom_project_detail" tenga el estado de initialized en true 
 * tantas veces como sea necesario.
 *  
 *  Ejemplo
 *  var timerN = setInterval(function () {
 *      try{
 *          if([tabla anterior].initialized){
 *              loadContent("#content_trademarks", "tom_trademarks");
 *              clearInterval(timerN);
 *          }
 *      }catch(e){
 *          console.log($(e));
 *          //clearInterval(timerN);
 *      }
 *  }, 500);
 *  
 */

// Primero
//loadContent("#content_tasks", "users");

// Segundo
/*var timer1 = setInterval(function () {
    try{
        if(ft_tom_project_detail.initialized){
            loadContent("#content_pendientes", "tom_actuaciones_dashboard");
            clearInterval(timer1);
        }
    }catch(e){
        console.log($(e));
        //clearInterval(timer1);
    }
}, 500);*/