<div class="social container">

  <div class="row justify-content-center h-a">

    <?php
    $iconos = array(
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

    for ($i=0; $i < count($iconos); $i++):

      ?>

      <div class="col-1 text-center h-a">
        <i class="fab fa-instagram"></i>
      </div>

    <?php endfor; ?>


  </div>
</div>
