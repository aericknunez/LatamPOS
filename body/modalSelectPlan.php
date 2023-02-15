<!-- Central Modal Small -->
<div class="modal fade" id="modalSelectPlan" tabindex="-1" role="dialog" aria-labelledby="modalSelectPlan"
  aria-hidden="true" data-backdrop="false">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Elija su plan favorito</h4>
<!--         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">












<div class="container" id="contenido-img-modal"> 

<div class="row">

          <div class="col-md-4 col-12 mb-3 text-center border">
              <img src="img/pos/carousel/price-1.png" alt="Prototyping Tool" class ="img-fluid img-responsive rounded">
               <div class="row-fluid">
                  <strong>
                      Básico
                  </strong>
               </div>
                
                  <div>
                      Sistema pago mensual
                  </div>
                  <h3> <?php echo Helpers::Dinero(Helpers::PlanPrecio(1, 1)) ?> </h3>
                  <a href="adquirir?plan=1&plan_type=1" class="price_btn btn_hover">Adquirir Ahora</a>
          </div>


          <div class="col-md-4 col-12 mb-3 text-center border">
              <img src="img/pos/carousel/price-2.png" alt="Prototyping Tool" class ="img-fluid img-responsive rounded">
               <div class="row-fluid">
                  <strong>
                      Profesional
                  </strong>
               </div>
                
                  <div>
                      Sistema pago mensual
                  </div>
                  <h3> <?php echo Helpers::Dinero(Helpers::PlanPrecio(2, 1)) ?> </h3>
                  <a href="adquirir?plan=2&plan_type=1" class="price_btn btn_hover">Adquirir Ahora</a>
          </div>


          <div class="col-md-4 col-12 mb-3 text-center border">
              <img src="img/pos/carousel/price-3.png" alt="Prototyping Tool" class ="img-fluid img-responsive rounded">
               <div class="row-fluid">
                  <strong>
                      Premium
                  </strong>
               </div>
                
                  <div>
                      Sistema pago mensual
                  </div>
                  <h3> <?php echo Helpers::Dinero(Helpers::PlanPrecio(3, 1)) ?> </h3>
                  <a href="adquirir?plan=3&plan_type=1" class="price_btn btn_hover">Adquirir Ahora</a>
          </div>


</div>

<hr class="mb-4">

<div class="row">

          <div class="col-md-4 col-12 mb-3 text-center border">
              <img src="img/pos/carousel/price-1.png" alt="Prototyping Tool" class ="img-fluid img-responsive rounded">
               <div class="row-fluid">
                  <strong>
                      Básico
                  </strong>
               </div>
                
                  <div>
                      Sistema pago unico
                  </div>
                  <h3> <?php echo Helpers::Dinero(Helpers::PlanPrecio(1, 2)) ?> </h3>
                  <a href="adquirir?plan=1&plan_type=2" class="price_btn btn_hover">Adquirir Ahora</a>
          </div>


          <div class="col-md-4 col-12 mb-3 text-center border">
              <img src="img/pos/carousel/price-2.png" alt="Prototyping Tool" class ="img-fluid img-responsive rounded">
               <div class="row-fluid">
                  <strong>
                      Profesional
                  </strong>
               </div>
                
                  <div>
                      Sistema pago unico
                  </div>
                  <h3> <?php echo Helpers::Dinero(Helpers::PlanPrecio(2, 2)) ?> </h3>
                  <a href="adquirir?plan=2&plan_type=2" class="price_btn btn_hover">Adquirir Ahora</a>
          </div>


          <div class="col-md-4 col-12 mb-3 text-center border">
              <img src="img/pos/carousel/price-3.png" alt="Prototyping Tool" class ="img-fluid img-responsive rounded">
               <div class="row-fluid">
                  <strong>
                      Premium
                  </strong>
               </div>
                
                  <div>
                      Sistema pago unico
                  </div>
                  <h3> <?php echo Helpers::Dinero(Helpers::PlanPrecio(3, 2)) ?> </h3>
                  <a href="adquirir?plan=3&plan_type=2" class="price_btn btn_hover">Adquirir Ahora</a>
          </div>


</div>




</div>























      </div>
      <div class="modal-footer">
<!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button> -->
        <a href="precios" class="btn btn-primary btn-sm">Elegir Después</a>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->









<!-- Abrir el modal cuando carga -->

<!-- <div class="modal fade" id="LoadModal" tabindex="-1" role="dialog" aria-labelledby="LoadModal"
  aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">
      <div class="modal-body">
        <div class="row justify-content-center" ><img src="assets/img/loa.gif" alt=""></div>
      </div>
    </div>
  </div>
</div> -->