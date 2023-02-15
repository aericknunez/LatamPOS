<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">



                <div class="col-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s">
                        
                        <div class="f_social_icon">
                            <a href="#" class="ti-facebook"></a>
                            <a href="#" class="ti-twitter-alt"></a>
                            <a href="#" class="ti-vimeo-alt"></a>
                            <a href="#" class="ti-pinterest"></a>
                        </div>
                        <p>Latam POS es un software desarrollado por</p>
                        <h3 class="f-title f_600 t_color f_size_18">Hibrido - Soluciones tecnológicas</h3>
                    </div>
                </div>


                <div class="col-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s">
                        
                        
                        <h3 class="f-title f_600 t_color f_size_18">CONTACTENOS</h3>
                        <p>Urb La Mascota Cl 2 No 231 Col San Benito. San Salvador El Salvador</p>
                        <p>Telefono: <a href="tel:50324679707">(+503) 2467 9707</a></p>
                        <p>WhatsApp: <a href="https://api.whatsapp.com/send?phone=50370169035" target="blank">(+503) 7016 9035</a></p>
                    </div>
                </div>


            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">© Latam POS <?php echo date("Y"); ?>.</p>
                </div>
                <div class="col-lg-6 col-sm-5 text-right">
                    <p>Made with <i class="icon_heart"></i> in <a href="https://hibridosv.com" target="_blank" >Hibrido</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="206020093639450"
  theme_color="#20cef5"
  logged_in_greeting="Hola! Como podemos ayudarte?"
  logged_out_greeting="Hola! Como podemos ayudarte?">
</div>