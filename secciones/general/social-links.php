<div class="social container">

  <div class="row justify-content-center h-a">

    <?php
    $icono = array(
      'google-plus-g',
      'facebook',
      'linkedin',
      'twitter',
      'instagram',
    );

    $links = array(
      'http://gplus.com',
      'http://facebook.com',
      'http://linkedin.com',
      'http://twitter.com',
      'http://instagram.com'
    );

    for ($i=0; $i < count($icono); $i++):

      ?>

      <div class="col-lg-1 col-md-2 h-a">
        <div class="link-social-icon d-flex"><!-- borde -->
          <a class="color-social-1 col-12 text-center align-self-center" href="<?php echo $links[$i]?>" target="_blank">
            <i class="fab fa-<?php echo $icono[$i]?>"></i>
          </a>
        </div>
      </div>

    <?php endfor; ?>


  </div>
</div>
