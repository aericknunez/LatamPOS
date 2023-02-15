
    <!--============= Shopping Cart ===============-->
    <section class="checkout_area bg_color sec_pad">
        <div class="container">
            <form action="#" method="post">
                <div class="row justify-content-center">



<!--                     <div class="col-md-6">
                        <div class="checkout_content">


                            <h3 class="checkout_title f_p f_600 f_size_20 mb_40">
                                Datos Generales
                            </h3>
                            <div class="row">
                                <h6>Nombre: </h6>
                            </div>
                            <div class="row">
                               <h6>Dirección: </h6>
                            </div>
                            <div class="row">
                               <h6>Teléfono: </h6>
                            </div>
                            <div class="row">
                               <h6> Email: </h6>
                            </div>
     
                        </div>
                    </div> -->



                    <div class="col-md-6">
                        <div class="cart_total_box">
                            <h3 class="checkout_title f_p f_600 f_size_20 mb_20">
                               Su Órden
                            </h3>
                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <tbody>
                                        <?php 
                                            if($_SESSION["plan_type"] == 3){
                                               echo '<tr class="order_item">
                                                    <td>'. $_SESSION["plan_descripcion"] .'</td>
                                                    <td class="price">'. Helpers::Dinero(Helpers::PlanPrecio($_SESSION["plan"], 1) * 12) .'</td>
                                                    </tr>';
                                                echo '<tr class="order_item">
                                                    <td>10% de descuento por pago anual</td>
                                                    <td class="price"> - '. Helpers::Dinero((Helpers::PlanPrecio($_SESSION["plan"], 1) * 0.10)*12) .'</td>
                                                    </tr>';       
                                            } else {
                                                echo '<tr class="order_item">
                                                    <td>'. $_SESSION["plan_descripcion"] .'</td>
                                                    <td class="price">'. Helpers::Dinero($_SESSION["plan_precio"]) .'</td>
                                                    </tr>';  
                                            }


                                         ?>
                                        <tr class="order_item">
                                            <td>Gasto de instalación</td>
                                            <td class="price">$0.00</td>
                                        </tr>
                                        <tr class="subtotal">
                                            <td class="price">Subtotal</td>
                                            <td class="price"><?php echo Helpers::Dinero($_SESSION["plan_precio"]) ?></td>
                                        </tr>
   <!--                                      <tr class="subtotal">
                                            <td class="price">Shipping </td>
                                            <td>Free Shipping</td>
                                        </tr> -->
                                        <tr class="subtotal order">
                                            <td class="price">Total</td>
                                            <td class="total"><?php echo Helpers::Dinero($_SESSION["plan_precio"]) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php // si es mensual cambiarlo a anual
                                    if($_SESSION["plan_type"] == 1){
                                        ?>
                                    <small><?php echo Helpers::Dinero(Helpers::PlanPrecio($_SESSION["plan"], $_SESSION["plan_type"]) * 0.90) ?> / mes en Pago Anual || <?php echo Helpers::Dinero((Helpers::PlanPrecio($_SESSION["plan"], $_SESSION["plan_type"]) * 0.10)*12) ?> de Ahorro || Total: <strong><?php echo Helpers::Dinero((Helpers::PlanPrecio($_SESSION["plan"], $_SESSION["plan_type"]) * 0.90)*12) ?></strong></small>
                                <a href="adquirir?plan=<?php echo $_SESSION["plan"] ?>&plan_type=3" class="price_btn btn_hover btm-sm">Cambiar a un año</a>
                                <?
                                    }
                                 ?> 


                                <div id="paypal-button-container"></div>

                            </div>
                        </div>
                    </div>


                </div>
            </form>

        </div>
    </section>
    <!--============= Shopping Cart ===============-->


<?php 

// plan_type
// 1 =  a mensualidades
// 2 = Pago de por vida

if($_SESSION["plan_type"] == 1 or $_SESSION["plan_type"] == 3){
include_once 'body/includes/boton_pay.php';
}

if($_SESSION["plan_type"] == 2){
include_once 'body/includes/boton_life.php';
}

?>

