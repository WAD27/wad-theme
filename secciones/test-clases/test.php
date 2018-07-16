<?php include "header-test.php"; ?>

<section class="test container">

  <div class="row">

    <h1 class="col-12 text-center color-black">Test clases textos</h1>

    <?php
    $textos = array('text-title1','text-title2','text-title3','text-p1','text-p2','text-p3','text-link','text-link-active');
    for ($i=0; $i < count($textos); $i++):
      ?>
      <h1 class="col-12 text-center <?php echo $textos[$i]; ?> color-dark"><?php echo 'clase:  .'.$textos[$i] ?></h1>

    <?php endfor; ?>

  </div>

</section>

<!--  -->

<section class="test container">

  <div class="row">

    <h1 class="col-12 text-center color-black">Test clases color</h1>

    <?php
    $colores = array(
      'color-black',
      'color-white',
      'color-light',
      'color-dark',
      'color-gradient-1',
      'color-gradient-2',
      'color-button-1',
      'color-button-2'
    );
    $fondos = array(
      'bg-black',
      'bg-white',
      'bg-light',
      'bg-dark',
      'bg-gradient-1',
      'bg-gradient-2',
      'bg-button-1',
      'bg-button-2'
    );

    for ($i=0; $i < count($colores); $i++):
      ?>
      <h1 class="col-12 text-center <?php echo $colores[$i]; if($fondos[$i] === 'bg-white') {echo 'bg-black';}  ?>"><?php echo 'clase:  .'.$colores[$i] ?></h1>
        <h1 class="col-12 text-center <?php echo $fondos[$i]; ?>"><?php echo 'clase:  .'.$fondos[$i] ?></h1>

      <?php endfor; ?>

    </div>

  </section>


  <?php include "../../footer.php"; ?>
