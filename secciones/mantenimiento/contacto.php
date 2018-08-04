
<!--  -->
<div class="seleccion-form container">

  <!-- boton selector -->
  <div class="boton_input row h-a text-center justify-content-center">
    <div id="boton-seleccion-1" class="col-md-2 col-sm-5 h-a">Teléfono</div>
    <div id="boton-seleccion-2" class="col-md-2 col-sm-5 h-a">Email</div>
  </div>
  <!-- inputs -->
  <div class="row justify-content-center">

    <div class="landing-input row col-lg-4 col-sm-10">

      <label id="seleccionado-1" class="col-8">
        <input type="tel" name="telephone" id="telephone" placeholder="Ingresa tu número de teléfono" class="input text-p3" value="" required="required">
      </label>
      <!-- opcion dos escondida -->
      <label id="seleccionado-2" class="col-8 hidden">
        <input type="email"  name="email" id="email" placeholder="Ingresa tu dirección correo" class="input text-p3" value="" >
      </label>

      <!-- <fieldset class="col-2"> -->
        <button id="boton_form" class="boton-form col-4" type="submit" value="">Enviar</button>
      <!-- </fieldset> -->

    </div>

  </div>

</div>

<!-- respuesta -->
<p id="formResponse" class="text-center" style="margin:16px 16px;"></p>
<p id="mensaje_res" class="text-center"><i class="fas fa-success"></i></p>
<div class="alert callout" style="display: none;">
  <p class="warning"><i class="fa fa-alert"></i> Hay algunos errores, faltan campos obligatorios.</p>
</div>
