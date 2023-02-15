
    <!--============= Shopping Cart ===============-->
    <section class="checkout_area bg_color sec_pad">
        <div class="container">
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="checkout_content">
<!--                             <div class="return_customer">
                                <i class="icon_error-circle_alt"></i>
                                Returning customer? <a data-toggle="collapse" href="#coupon" aria-expanded="false" class="collapsed">Click here to login</a>
                            </div> -->
<!--                             <div class="collapse tab_content" id="coupon">
                                <p class="f_p f_400">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                <div class="login_form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" name="text" class="form-control" placeholder="Username or Email">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" name="EMAIL" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="login_button">
                                                <input type="checkbox" value="None" id="squared1" name="check">
                                                <label class="l_text" for="squared1">Remember Me</label>
                                                <button class="btn login_btn" type="submit">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="return_customer">
                                <i class="icon_error-circle_alt"></i>
                                Tienes un cupón? <a data-toggle="collapse" href="#coupon_two" aria-expanded="false" class="collapsed">Click para ingresar el código</a>
                            </div>
                            <div class="collapse tab_content" id="coupon_two">
                                <p class="f_p f_400">Por favor ingrese el código de descuento.</p>
                                <div class="login_form coupon_form">
                                    <input type="text" name="text" class="form-control" placeholder="Coupon code">
                                    <button class="btn login_btn" type="submit">Aplicar Descuento</button>
                                </div>
                            </div>
                            <h3 class="checkout_title f_p f_600 f_size_20 mb_40">
                                Datos Generales
                            </h3>

                            <form action="#" method="post" id="form-datos" name="form-datos" >
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="nombres" name="nombres" placeholder="Nombres" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="negocio" name="negocio" placeholder="Nombre del Negocio" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>País<abbr class="required" title="required">*</abbr></label>
                                    <select class="selectpickers" id="pais" name="pais" required>
                                        <option value="menu_order">El Salvador</option>
                                        <option value="popularity">Guatemala</option>
                                        <option value="rating">Honduras</option>
                                        <option value="date">Nicaragua</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Departamento<abbr class="required" title="required">*</abbr></label>
                                    <select class="selectpickers" id="departamento" name="departamento" required>
                                        <option value="menu_order">El Salvador</option>
                                        <option value="popularity">Guatemala</option>
                                        <option value="rating">Honduras</option>
                                        <option value="date">Nicaragua</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                     <label>Municipio<abbr class="required" title="required">*</abbr></label>
                                    <select class="selectpickers" id="municipio" name="municipio" required>
                                        <option value="menu_order">El Salvador</option>
                                        <option value="popularity">Guatemala</option>
                                        <option value="rating">Honduras</option>
                                        <option value="date">Nicaragua</option>
                                    </select>

                                </div>
                                <div class="col-lg-6">
                                    <label>Email<abbr class="required" title="required">*</abbr></label>
                                    <input type="text" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">

                                    <label>Dirección<abbr class="required" title="required">*</abbr></label>
                                    <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Notas</label>
                                    <textarea id="notas" name="notas" placeholder="Agregue aqui algo importante que desee decirnos"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                
 <!--                                <ul class="list-unstyled payment_list">
                                    <li class="payment">
                                        <div class="radio-btn">
                                            <input type="checkbox" value="None" id="squaredsix" name="check">
                                            <label for="squaredsix"></label>
                                        </div>
                                        <h6>Direct Bank Transfer</h6>
                                        <div class="note">
                                            Make your payment directty into our bank account. Please use your Order ID as the payment reference. Your arder won't be shipped until the funds have cleared in our account.
                                        </div>
                                    </li>
                                    <li class="payment">
                                        <div class="radio-btn">
                                            <input type="checkbox" value="None" id="squaredseven" name="check">
                                            <label for="squaredseven"></label>
                                        </div>
                                        <h6>Check Payment</h6>
                                    </li>
                                    <li class="payment">
                                        <div class="radio-btn">
                                            <input type="checkbox" value="None" id="squaredeight" name="check">
                                            <label for="squaredeight"></label>
                                        </div>
                                        <h6>Cash on Delivery</h6>
                                    </li>
                                </ul> -->
                                <div class="condition">
                                    <p>Sus datos personales son de uso exclusivo para la creación de su cuenta darle soporte y configuraciones de su sistema. No compartimos su informacón en ningún momento</p>
                                    <input type="checkbox" value="None" id="squarednine" name="check">
                                    <label class="l_text" for="squarednine">He leído y estoy de acuerdo con los terminos y condiciones <span>*</span></label>
                                </div>
                                <button type="submit" id="btn-datos" name="btn-datos" class="button">Guardar Datos</button>
                                <div id="contenido"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!--============= Shopping Cart ===============-->