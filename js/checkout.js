$(document).ready(function(){


    $('#btn-datos').click(function(e){ /// agregar un producto 
    e.preventDefault();
    $.ajax({
            url: "body/includes/adddatos.php?op=1", // op=1 debe ser
            method: "POST",
            data: $("#form-datos").serialize(),
            beforeSend: function () {
                $('#btn-datos').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
            },
            success: function(data){
                $('#btn-datos').html('Guardar Datos').removeClass('disabled');       
                // $("#form-datos").trigger("reset");
                $("#contenido").html(data); 
            }
        })
    });









}); // termina query