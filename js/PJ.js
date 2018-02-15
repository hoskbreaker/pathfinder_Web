$(document).ready(function(){
	setInterval(function(){
        var url = "./includes/savePJ.php";
        $.ajax({                        
           type: "POST",           
           url: url,                    
		   data:$('#general').serialize(),
           success: function(data)            
           {
             $('#resp').innerHTML = "datos guardados";
				//alert("datos guardados");
           },
		   error: function(){
			   alert("error al guardar");
		   }		   
         });
           console.log($('#general').serialize());
      },15000);
      
    });