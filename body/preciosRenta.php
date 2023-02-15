<section class="pricing_area_two sec_pad">
    <div class="container custom_container p0">
        <div class="sec_title text-center">
            <h2 class="f_p f_size_30 l_height50 f_600 t_color2">Planes de pago para todos</h2>
            <p class="f_400 f_size_16 l_height30 mb-0">Nuestros planes de pago son adaptables a tu negocio, queremos servirle de la mejor manera, <br> Nuestros planes son mensuales, pero si desea hacer un solo pago solicitelo</p>
        </div>
        <ul class="nav nav-tabs price_tab price_tab_two mt_70" role="tablist">
            <li class="nav-item">
                <a class="nav-link active active_hover" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pago Mensual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pago Único</a>
            </li>
        </ul>
        <div class="tab-content price_content price_content_two">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">
                            <img src="img/pos/price/one.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Básico</h5>
                            <p>Para pequeños negocios</p>
                            <div class="price f_700 f_size_40 t_color2"><?php echo Helpers::Dinero(Helpers::PlanPrecio(1, 1)) ?><sub class="f_size_16 f_400">/ mes</sub></div>
                            <small><?php echo Helpers::Dinero(Helpers::PlanPrecio(1, 1) * 0.90) ?> / mes en Pago Anual || <?php echo Helpers::Dinero((Helpers::PlanPrecio(1, 1) * 0.10)*12) ?> de Ahorro</small>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Ventas y Facturación</li>
                                <li><i class="ti-check"></i>Control de inventario</li>
                                <li><i class="ti-check"></i>Control de fujo de caja</li>
                                <li><i class="ti-check"></i>Corte Diario</li>
                                <li><i class="ti-close"></i>Control de Creditos</li>
                                <li><i class="ti-close"></i>Cuentas por pagar</li>
                            </ul>
                            <a href="adquirir?plan=1&plan_type=1" class="price_btn btn_hover">Adquirir Ahora</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">
                            <div class="tag"><span>Popular</span></div>
                            <img src="img/pos/price/two.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Profesional</h5>
                            <p>Para negocios en crecimiento</p>
                            <div class="price f_700 f_size_40 t_color2"><?php echo Helpers::Dinero(Helpers::PlanPrecio(2, 1)) ?><sub class="f_size_16 f_400">/ mes</sub>
                            </div>
                            <small><?php echo Helpers::Dinero(Helpers::PlanPrecio(2, 1) * 0.90) ?> / mes en Pago Anual || <?php echo Helpers::Dinero((Helpers::PlanPrecio(2, 1) * 0.10)*12) ?> de Ahorro</small>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Opciones de (Básico)</li>
                                <li><i class="ti-check"></i>Multiples Usuarios</li>
                                <li><i class="ti-check"></i>Asignaciónn de Creditos</li>
                                <li><i class="ti-check"></i>2 Formas de usos</li>
                                <li><i class="ti-close"></i>Cuentas por Pagar</li>
                                <li><i class="ti-close"></i>Control de Planillas</li>
                            </ul>
                            <a href="adquirir?plan=2&plan_type=1" class="price_btn btn_hover">Adquirir Ahora</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">
                            <img src="img/pos/price/one.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Premium</h5>
                            <p>Para grandes empresas</p>
                            <div class="price f_700 f_size_40 t_color2"><?php echo Helpers::Dinero(Helpers::PlanPrecio(3, 1)) ?><sub class="f_size_16 f_400">/ mes</sub></div>
                            <small><?php echo Helpers::Dinero(Helpers::PlanPrecio(3, 1) * 0.90) ?> / mes en Pago Anual || <?php echo Helpers::Dinero((Helpers::PlanPrecio(3, 1) * 0.10)*12) ?> de Ahorro</small>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Opciones de (Profesional)</li>
                                <li><i class="ti-check"></i>Varios Equipos conectados</li>
                                <li><i class="ti-check"></i>Cuentas por Pagar</li>
                                <li><i class="ti-check"></i>Manejo de Planillas</li>                              
                                <li><i class="ti-check"></i>Manejo de cotizaciones</li>                              
                                <li><i class="ti-check"></i>Apto para Ecommerce</li>                      
                            </ul>
                            <a href="adquirir?plan=3&plan_type=1" class="price_btn btn_hover">Adquirir Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">                       
                            <img src="img/pos/carousel/price-3.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Básico</h5>
                            <p>Para pequeños negocios</p>
                            <div class="price f_700 f_size_40 t_color2"><?php echo Helpers::Dinero(Helpers::PlanPrecio(1, 2)) ?><sub class="f_size_16 f_400">/ Único</sub></div>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Ventas y Facturación</li>
                                <li><i class="ti-check"></i>Control de inventario</li>
                                <li><i class="ti-check"></i>Control de fujo de caja</li>
                                <li><i class="ti-check"></i>Corte Diario</li>
                                <li><i class="ti-close"></i>Control de Creditos</li>
                                <li><i class="ti-close"></i>Cuentas por pagar</li>
                            </ul>
                            <a href="adquirir?plan=1&plan_type=2" class="price_btn btn_hover">Adquirir Ahora</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">
                            <img src="img/pos/carousel/price-2.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Profesional</h5>
                            <p>Para negocios en crecimiento</p>
                            <div class="price f_700 f_size_40 t_color2"><?php echo Helpers::Dinero(Helpers::PlanPrecio(2, 2)) ?><sub class="f_size_16 f_400">/ Único</sub></div>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Opciones de (Básico)</li>
                                <li><i class="ti-check"></i>Multiples Usuarios</li>
                                <li><i class="ti-check"></i>Asignaciónn de Creditos</li>
                                <li><i class="ti-check"></i>2 Formas de usos</li>
                                <li><i class="ti-close"></i>Cuentas por Pagar</li>
                                <li><i class="ti-close"></i>Control de Planillas</li>
                            </ul>
                            <a href="adquirir?plan=2&plan_type=2" class="price_btn btn_hover">Adquirir Ahora</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">

                            <div class="tag"><span>El Mejor</span></div>
                            <img src="img/pos/carousel/price-1.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Premium</h5>
                            <p>Para grandes empresas</p>
                            <div class="price f_700 f_size_40 t_color2"><?php echo Helpers::Dinero(Helpers::PlanPrecio(3, 2)) ?><sub class="f_size_16 f_400">/ Único</sub></div>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Opciones de (Profesional)</li>
                                <li><i class="ti-check"></i>Varios Equipos conectados</li>
                                <li><i class="ti-check"></i>Cuentas por Pagar</li>
                                <li><i class="ti-check"></i>Manejo de Planillas</li>                              
                                <li><i class="ti-check"></i>Manejo de cotizaciones</li>                              
                                <li><i class="ti-check"></i>Apto para Ecommerce</li>                      
                            </ul>
                            <a href="adquirir?plan=3&plan_type=2" class="price_btn btn_hover">Adquirir Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <small>** 10% de descuento al pago anual</small>
</section>