<section id="maintenance" class="container-fluid">

  <div class="row">

    <div class="col-12 align-self-center h-a">

      <div class="logo-landing text-center">
        <img src="img/wadlogo.svg" alt="WAD Web logo v1.0">
      </div>

      <h1 class="text-title1 col-12 text-center">
        Pronto regresaremos
      </h1>

      <p class="text-p1 col-12 text-center">
        ¿Necesita ayuda? Nosotros nos comunicamos contigo
      </p>

      <form id="form-landing container" class="col-12" method="post">
        <?php include "secciones/mantenimiento/contacto.php"; ?>
      </form>

      <?php include "secciones/general/social-links.php" ?>

    </div>

    <div class="footer-landing container-fluid h-a">

      <div class="row h-a">

      <?php
      $footer_prefix = array(
        'Email: ',
        'Tel: ',
        'Dirección: ',
      );
      $footer_info = array(
        '<a href="mailto:daniela@wadweb.com.mx"> daniela@wadweb.mx</a>',
        '<a href="tel:5513959466"> 55/13 95 94 66</a>',
        'CDMX, México'
      );
      for ($i=0; $i < count($footer_prefix) ; $i++):
        ?>

        <div class="text-p3 col-4 h-a text-center">

          <?php echo $footer_prefix[$i]; ?>

          <span>
            <?php echo $footer_info[$i]; ?>
          </span>
        </div>

      <?php endfor; ?>

    </div>

    </div>

  </div>

</section>
