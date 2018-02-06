$(document).ready(function(){
    //live feed
    var ajaxCall=function(){
        $("#formulario").Submit(function(e){
            ajax_submit();
        });
    }
    setInterval(ajaxCall,15000);

    //real submit
    $("#formulario").ajaxForm(function(e){
        ajax_submit();
    });

    function ajax_submit(){//ajax_code
        $.ajax({
            type:'post',
            url:'savePJ.php',
            data:$("#formulario").serialize(),
            success:function(data) {
                //document.getElementById("result").innerHTML=data;
				alert("datos guardados");
            }
        });
    }
});