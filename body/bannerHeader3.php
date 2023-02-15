<section class="breadcrumb_area" style="background-image: url('img/Img-200.jpg'); background-position:  center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
    <div class="breadcrumb_content text-center">
       <?php 

        	if($urlCheckout == "datos"){
        		echo '<h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Gracias por seleccionar su órden</h1>';
        		echo '<p class="f_400 w_color f_size_16 l_height26">Sólo necesitamos parte de su información para poder crear su cuenta en el sistema, todos los campos son necesarios.</p>';
        	}
        	if($urlCheckout == "pay"){
        		echo '<h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Ya casi terminamos</h1>';
        		echo '<p class="f_400 w_color f_size_16 l_height26">Sólo nos falta realizar el pago de su sistema solicitado, luego estará listo para disfrutar de nuestro sistema</p>';
        	}
        	

        	 ?>
    </div>
</div>
</section>