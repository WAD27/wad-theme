<div class="social container">

  <div class="row justify-content-center h-a">

    <?php
    $icono = array(
      'gplus',
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

      <div class="col-lg-1 col-md-2 text-center h-a">
        <a href="<?php echo $links[$i]?>" target="_blank">
          <i class="text-p3 fab fa-instagram"></i>
        </a>
      </div>

    <?php endfor; ?>


  </div>
</div>
