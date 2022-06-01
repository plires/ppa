<!-- Footer -->
<footer class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="row">
          
          <div class="col-md-3 logo_footer">
            <img class="img-fluid" src="./img/logo-footer.png" alt="logo ppa buenos aires footer">
          </div>

          <div class="col-md-6 data">
            <a 
              class="transition" 
              href="https://web.whatsapp.com/send?phone=+<?= WHATSAPP ?>&text=Hola,%20Necesito%20hacer%20una%20consulta...%20" 
              rel="noopener" 
              target="_blank">
              <i class="transition fa-solid fa-mobile-screen-button"></i><?= WHATSAPP_VISIBLE ?>
            </a> <br>
            <a class="transition" href="mailto:gbasur@ppabsas.com.ar" rel="noopener" target="_blank">
              <i class="transition fa-solid fa-envelope"></i>gbasur@ppabsas.com.ar
            </a>
          </div>

          <div class="col-md-3 rrss">
            <a class="transition" target="_blank" rel="noopener" href="<?= RRSS_INSTAGRAM ?>">
              <i class="transition fa-brands fa-instagram-square"></i>
            </a>
            <a class="transition" target="_blank" rel="noopener" href="<?= RRSS_FACEBOOK ?>">
              <i class="transition fa-brands fa-facebook-square"></i>
            </a>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12 copy">
            <p>&copy; <?= date('Y') ?> all rights reserved</p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</footer>
<!-- Footer end -->