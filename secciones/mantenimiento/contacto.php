
<!--  -->
<div class="seleccion-form cell">

  <!-- boton selector -->
  <div class="boton_input grid-x m-b-2 h-a text-center">
    <div id="boton-seleccion-1" class="small-5 medium-3 h-a color-secundario-3-bd color-blanco-bg color-primario-0">Teléfono</div>
    <div id="boton-seleccion-2" class="small-5 medium-3 h-a color-secundario-3-bd">Email</div>
  </div>
  <!-- inputs -->
  <label id="seleccionado-1" class="small-12 upper m-t-1">
    <input type="tel" name="telephone" id="tel" placeholder="Ingresa tu número de teléfono" class="input" value="" required>
    <span class="form-error"> Este campo es requerido.</span>
  </label>
  <!-- opcion dos escondida -->
  <label id="seleccionado-2" class="small-12 upper m-t-1 hidden">
    <input type="email"  name="email" id="email" placeholder="Ingresa tu dirección correo electrónico" class="input" value="" required>
    <span class="form-error"> Este campo es requerido.</span>
  </label>

</div>

<fieldset class="grid-x align-center m-t-3">
  <button id="boton_form" class="boton-form rounded upper text-center p-l-6 p-r-6 p-t-1 p-b-1" type="submit" value="">Contáctanos</button>
</fieldset>


<!-- respuesta -->
<p id="formResponse" class="color-primario-0 pt1"><?php //if($error) { echo($error); } ?></p>
<p id="mensaje_res" class="success color-blanco"><i class="fa fa-success"></i></p>
<div data-abide-error class="alert callout" style="display: none;">
  <p class="warning small_font"><i class="fa fa-alert"></i> Hay algunos errores, faltan campos obligatorios.</p>
</div>
