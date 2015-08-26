$(document).on("ready", inicio);
function evento(e) {
    e.preventDefault();
}
function inicio() {  
    alertify.set({ delay: 1000 });
    ///////////////////        
    $("#btnModificar").on("click", modificar_dias);
    $("#btnNuevo").on("click", nuevo);
    ////////
    cargar_dias();     
}
function cargar_dias(){
    $.ajax({
        type: "POST",
        dataType:'json',
        url: "carga_dias.php",        
        success: function(data) {                                      
            if(data[1] == 0){
                $("#lunes").parent().iCheck('uncheck');
            }else{
                $("#lunes").parent().iCheck('check');
            }
            if(data[2] == 0){
                $("#martes").parent().iCheck('uncheck');
            }else{
                $("#martes").parent().iCheck('check');                
            }
            if(data[3] == 0){
                $("#miercoles").parent().iCheck('uncheck');
            }else{
                $("#miercoles").parent().iCheck('check');                                
            }
            if(data[4] == 0){
                $("#jueves").parent().iCheck('uncheck');                
            }else{
                $("#jueves").parent().iCheck('check');                
            }
            if(data[5] == 0){
                $("#viernes").parent().iCheck('uncheck');                
            }else{
                $("#viernes").parent().iCheck('check');                
            }
            if(data[6] == 0){
                $("#sabado").parent().iCheck('uncheck');                
            }else{
                $("#sabado").parent().iCheck('check');                
            }
            if(data[7] == 0){
                $("#domingo").parent().iCheck('uncheck');                
            }else{
                $("#domingo").parent().iCheck('check');                
            }
            // alertify.success('Datos Cargados Correctamente');                                                  
        }
    });
}

function modificar_dias(){    
    if($("#lunes").is(":checked")){
        lunes = 1;
    }else{
        lunes = 0;
    }
    if($("#martes").is(":checked")){
        martes = 1;
    }else{
        martes = 0;
    }
    if($("#miercoles").is(":checked")){
        miercoles = 1;
    }else{
        miercoles = 0;
    }
    if($("#jueves").is(":checked")){
        jueves = 1;
    }else{
        jueves = 0;
    }
    if($("#viernes").is(":checked")){
        viernes = 1;
    }else{
        viernes = 0;
    }
    if($("#sabado").is(":checked")){
        sabado = 1;
    }else{
        sabado = 0;
    }
    if($("#domingo").is(":checked")){
        domingo = 1;
    }else{
        domingo = 0;
    }
     $.ajax({
        type: "POST",
        url: "modificar_dias.php",
        data: "lunes=" + lunes + "&martes=" + martes + "&miercoles=" + miercoles + "&jueves=" + jueves + "&viernes=" + viernes + "&sabado=" + sabado + "&domingo=" + domingo,
        success: function(data) {
            var val = data;
            if (val == 1) {
                alertify.success('Datos Agregados Correctamente');                                  
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }
        }
    });
}
function nuevo() {
    location.reload();
}