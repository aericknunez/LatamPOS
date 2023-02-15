<?php 
switch ($_SESSION["pselect"]) {
    case '1':
        $img_slider = "slider_farmacia.jpg";
        break;
    case '2':
        $img_slider = "slider_super.jpg";
        break;
    case '3':
        $img_slider = "slider_restaurante.jpg";
        break;
    case '4':
        $img_slider = "slider_abarroteria.jpg";
        break;
    case '5':
        $img_slider = "slider_rapida.jpg";
        break;
    case '6':
        $img_slider = "slider_ferreteria.jpg";
        break;
    case '7':
        $img_slider = "slider_cafeteria.jpg";
        break;
    case '8':
        $img_slider = "slider_agroservicio.jpg";
        break;
    case '9':
        $img_slider = "slider_libreria.jpg";
        break;
    case '10':
        $img_slider = "slider_pizzeria.jpg";
        break;
    case '11':
        $img_slider = "slider_comercial.jpg";
        break;
    case '12':
        $img_slider = "slider_zapateria.jpg";
        break;
    default:
        $img_slider = "pos_slideshow3.jpg";
        break;

}



 ?>

<section class="pos_banner_area">
    <div class="pos_slider owl-carousel">
        <div class="pos_banner_item" style="background: url(img/pos/<?php echo  $img_slider ?>);"></div>
        <div class="pos_banner_item" style="background: url(img/pos/slider01.jpg);"></div>
        <div class="pos_banner_item" style="background: url(img/pos/slider02.jpg);"></div>
        <div class="pos_banner_item" style="background: url(img/pos/slider03.jpg);"></div>
        
    </div>
    <div class="container">
        <div class="pos_banner_text text-center">
            <h6>Bienvenido a LatamPOS</h6>
            <h2>Ventas sin complicaciones para tu <span>negocio </span>de <span><?php if($_SESSION["pnombre"]){
                echo $_SESSION["pnombre"];
            } else {
                echo "Punto de Venta";
            }  ?></span>  </h2>
            <div class="action_btn d-flex align-items-center justify-content-center wow fadeInLeft" data-wow-delay="0.6s">
                <a href="checkout" class="software_banner_btn">Adquirir Ahora</a>
                <a href="https://www.youtube.com/watch?v=LwJSDTTig_E" class="video_btn popup-youtube">
                    <div class="icon"><i class="fas fa-play"></i></div><span>Ver Video</span>
                </a>
            </div>
        </div>
    </div>
</section>