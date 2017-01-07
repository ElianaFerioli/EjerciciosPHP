/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    if($("h3").text()!="Modificar Evento") {
        //Esconde todo el formulario
        $("#instalacion").hide();
        $("#pista").hide();
        $("select[name=nivel]").hide();
        $("input[name=fechEven]").hide();
        $("input[name=horaEven]").hide();
        $("input[name=usuariosFaltantes]").hide();
        $("#insertarEvento").hide();
        //Rellena los Option de las pistas dependiendo de la instalación y el deporte
        $("#instalacion").change( function(){
            var idInstalacion = $(this).children(":selected").attr("id");
            var idDeporte = $("#deporte").children(":selected").attr("id");
            $.ajax({
                url: "../Controller/administracion.php",
                method: "GET",
                data: "consultaPistaInstalcion=" + idInstalacion + "&deporte=" + idDeporte,
                success: function(result){
                    //Borra los anteriores option
                    $(".pistas").each(function(){
                        $(this).remove();
                    });
                    //Esconde todo el formulario
                    $("#instalacion").hide();
                    $("#pista").hide();
                    $("select[name=nivel]").hide();
                    $("input[name=fechEven]").hide();
                    $("input[name=horaEven]").hide();
                    $("input[name=usuariosFaltantes]").hide();
                    $("#insertarEvento").hide();
                    //Introduce nuevos option
                    var output = jQuery.parseJSON(result);
                    if(output.length>0){
                        for (i=0; i < output.length; i = i + 2){
                           $("#pista").append("<option class=\"pistas\" value=\"" + parseInt(output[i + 1]) +"\">" + output[i] +"</option>");
                        }
                        $("#instalacion").show();
                        $("#pista").show();
                        $("select[name=nivel]").show();
                        $("input[name=fechEven]").show();
                        $("input[name=horaEven]").show();
                        $("input[name=usuariosFaltantes]").show()
                        $("#insertarEvento").show();
                    }
                }
            });
        });
        //Rellena los option de las instalaciones dependiendo del deporte
        $("#deporte").change( function(){
            var id = $(this).children(":selected").attr("id");
            $.ajax({
                url: "../Controller/administracion.php",
                method: "GET",
                data: "consultaInstalacion="+id,
                success: function(result){
                    //Borra los anteriores option
                    $(".instalaciones").each(function(){
                        $(this).remove();
                    });
                    //Esconde todo el formulario
                    $("#instalacion").hide();
                    $("#pista").hide();
                    $("select[name=nivel]").hide();
                    $("input[name=fechEven]").hide();
                    $("input[name=horaEven]").hide();
                    $("input[name=usuariosFaltantes]").hide();
                    $("#insertarEvento").hide();
                    var output = jQuery.parseJSON(result);
                    //Introduce nuevos option
                    if(output.length>0) {
                        for (i=0; i < output.length; i = i + 2){
                           $("#instalacion").append("<option class=\"instalaciones\" id=\"" + parseInt(output[i + 1]) +"\">" + output[i] +"</option>");
                        }
                        $("#instalacion").show();
                    }
                }
            });
        });
    } else {
        //Deja selected los options correspondientes
        var idDeporte = $("#deporte").children(":selected").attr("id");
        //Corrobora cuál es el deporte seleccionado
        var idEvento = $("input[name=codEven").attr("value");
        //sirve para recoger el nombre de la instalación
        var nomInst = "";
        $.ajax({
                async: false,
                url: "../Controller/administracion.php",
                method: "GET",
                data: "consultaIntalacionEventoAjax="+idEvento,
                success: function(result){
                    nomInst = jQuery.parseJSON(result);
                     
                }
            });
        //sirve para recoger el nombre de la pista
        var nomPist = "";
        var idInstalacion = "";
        $.ajax({
                async: false,
                url: "../Controller/administracion.php",
                method: "GET",
                data: "consultaPistaEventoAjax="+idEvento,
                success: function(result){
                    var output = jQuery.parseJSON(result)
                    nomPist = output[0];     
                    idInstalacion = output[1]; 
                }
            });
        //crea el select de instalacion
        $.ajax({
                url: "../Controller/administracion.php",
                method: "GET",
                data: "consultaInstalacion="+idDeporte,
                success: function(result){
                    //Borra los anteriores option
                    $(".instalaciones").each(function(){
                        $(this).remove();
                    }); 
                    var output = jQuery.parseJSON(result);
                    //Introduce nuevos option
                    if(output.length>0) {
                        for (i=0; i < output.length; i = i + 2){
                           if(output[i]==nomInst){
                            $("#instalacion").append("<option selected class=\"instalaciones\" id=\"" + parseInt(output[i + 1]) +"\">" + output[i] +"</option>");
                           } else {
                            $("#instalacion").append("<option class=\"instalaciones\" id=\"" + parseInt(output[i + 1]) +"\">" + output[i] +"</option>");
                           }
                        }
                        $("#instalacion").show();
                    }
                }
            });
         //Crea el select de la pista
         var idDeporte = $("#deporte").children(":selected").attr("id");
         $.ajax({
                url: "../Controller/administracion.php",
                method: "GET",
                data: "consultaPistaInstalcion=" + idInstalacion + "&deporte=" + idDeporte,
                success: function(result){
                    //Borra los anteriores option
                    $(".pistas").each(function(){
                        $(this).remove();
                    });
                    //Introduce nuevos option
                    var output = jQuery.parseJSON(result);
                    if(output.length>0){
                        for (i=0; i < output.length; i = i + 2){
                            if(output[i]==nomPist){
                               $("#pista").append("<option selected class=\"pistas\" value=\"" + parseInt(output[i + 1]) +"\">" + output[i] +"</option>");
                            } else {
                               $("#pista").append("<option class=\"pistas\" value=\"" + parseInt(output[i + 1]) +"\">" + output[i] +"</option>");
                            }
                           
                        }
                    }
                }
            });
        //Rellena los Option de las pistas dependiendo de la instalación y el deporte
        $("#instalacion").change( function(){
            var idInstalacion = $(this).children(":selected").attr("id");
            var idDeporte = $("#deporte").children(":selected").attr("id");
            //deja seleccionadas las cabeceras
                $("#pista .defecto").attr("selected", "selected");
                $("#pista .defecto").attr("disabled", false);
            $.ajax({
                url: "../Controller/administracion.php",
                method: "GET",
                data: "consultaPistaInstalcion=" + idInstalacion + "&deporte=" + idDeporte,
                success: function(result){
                    //Borra los anteriores option
                    $(".pistas").each(function(){
                        $(this).remove();
                    });
                    //Introduce nuevos option
                    var output = jQuery.parseJSON(result);
                    if(output.length>0){
                        for (i=0; i < output.length; i = i + 2){
                           $("#pista").append("<option class=\"pistas\" value=\"" + parseInt(output[i + 1]) +"\">" + output[i] +"</option>");
                        }
                        $("#pista").show();
                        $("select[name=nivel]").show();
                        $("input[name=fechEven]").show();
                        $("input[name=horaEven]").show();
                        $("input[name=usuariosFaltantes]").show()
                        $("#insertarEvento").show();
                    }
                }
            });
        });
        //Rellena los option de las instalaciones dependiendo del deporte
        $("#deporte").change( function(){
            //borra las instalaciones y las pistas que haya
            $(".pistas").each(function(){
                        $(this).remove();
                    });
            $(".instalaciones").each(function(){
                        $(this).remove();
                    });
            //deja seleccionadas las cabeceras
                $(".defecto").each(function(){
                        console.log();
                        $(this).attr("selected", "selected");
                        $(this).attr("disabled", false);
                    });
            var id = $(this).children(":selected").attr("id");
            $.ajax({
                url: "../Controller/administracion.php",
                method: "GET",
                data: "consultaInstalacion="+id,
                success: function(result){
                    //Borra los anteriores option
                    $(".instalaciones").each(function(){
                        $(this).remove();
                    }); 
                    var output = jQuery.parseJSON(result);
                    //Introduce nuevos option
                    if(output.length>0) {
                        for (i=0; i < output.length; i = i + 2){
                           $("#instalacion").append("<option class=\"instalaciones\" id=\"" + parseInt(output[i + 1]) +"\">" + output[i] +"</option>");
                        }
                        $("#instalacion").show();
                    }
                }
            });
        });
    }
    
});

