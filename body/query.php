    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/propper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
    <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>




<?php 

if($_SESSION["pselect"] == NULL){
?>
     
    <script>
      function LanzaModal() {
        $('#productosModal').modal('show');
      }
      LanzaModal();
    </script> 


<?php 
}
?>

<script>

// LLamo por ajax el archivo donde genere las variables y luego cierro el modal
    $("body").on("click","#producto-select",function(){

        $('#productosModal').modal('hide');
        
        var op = $(this).attr('op');
        var dataString = 'op='+op;

        $.ajax({
            type: "POST",
            url: "body/includes/opciones.php",
            data: dataString,
            beforeSend: function () {
               $("#contenido-img-modal").html('<div class="row justify-content-center" ><img src="assets/img/loa.gif" alt=""></div>');
            },
            success: function(data) {            
                $("#contenido-img-modal").html(data);
            }
        });
    });    


</script>