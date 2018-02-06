$(document).ready(function(){
	setInterval(function(){
        var url = "savePJ.php";
		// var general={
			// nombre: $('#nombre').val(),
			// alineamiento: $('#alineamiento').val(),
			// jugador: $('#jugador').val(),
			// clas: $('#clas').val(),
			// niv: $('#niv').val(),
			// deidad: $('#deidad').val(),
			// homeland: $('#homeland').val(),
			// raza: $('#raza').val(),
			// tam: $('#tam').val(),
			// sexo: $('#sexo').val(),
			// edad: $('#edad').val(),
			// peso: $('#peso').val(),
			// ojos: $('#ojos').val(),
		// }
        $.ajax({                        
           type: "POST",                 
           url: url,                    
           //data: $("#formulario").serializeArray(),
		   //data: {"general":JSON.stringify(general)},
		   data:$('#formulario').serialize(),
           success: function(data)            
           {
             $('#resp').innerHTML = "datos guardados";
				alert("datos guardados");
           },
		   error: function(){
			   alert("error al guardar");
		   }		   
         });
           console.log($('#formulario').serialize());
      },15000);
      
    });