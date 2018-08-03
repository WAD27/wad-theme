$(document).ready(function() {

  var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  $("#form-landing").submit(function() {
    var envio = false
    var telefono = $('#tel')
    var correo = $('#email')

    if (!telefono.val() || !correo.val()) {
      if ($("#seleccionado-2").hasClass('hidden')) {
        if (!telefono.val()) {
          $("#mensaje_res").html('Falta el campo "Teléfono"')
          return false
        } else {envio = true}
      } else if ($("#seleccionado-1").hasClass('hidden')) {
        if (!correo.val() || !expr.test(correo.val())) {
          $("#mensaje_res").html('Falta el campo "Correo" o un formato admitido "@" ')
          return false;
        } else {envio = true}
      }
    } else {envio = true}
  // } else {alert("Inputs vacios")}
//
    if (envio === true) {
      $.post('secciones/mantenimiento/mail.php', {
        telephone: telefono.val(),
        email: correo.val(),
        contactFormSubmitted: 'yes'
      },
      function(data) {
        $("#mensaje_res").html(data);
      })
      return false
    }
    //
  });

  images()
  //fomrulario mantenimiento
  toggleInput()
  // landing_form_validation()

})

function images() {

  $('imgLiquidFill').imgLiquid()
  $('imgLiquidNoFill').imgLiquid({fill:false})

}

function landing_form_validation() {
  // Mantenimiento form response
  var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  $("#form-landing").submit(function() {
    var envio = false
    var telefono = $('#tel')
    var correo = $('#email')

    if (!telefono.val() || !correo.val()) {
      if ($("#seleccionado-2").hasClass('hidden')) {
        if (!telefono.val()) {
          $("#mensaje_res").html('Falta el campo "Teléfono"')
          return false
        } else {envio = true}
      } else if ($("#seleccionado-1").hasClass('hidden')) {
        if (!correo.val() || !expr.test(correo.val())) {
          $("#mensaje_res").html('Falta el campo "Correo" o un formato admitido "@" ')
          return false;
        } else {envio = true}
      }
    } else {envio = true}
  // } else {alert("Inputs vacios")}
//
    if (envio === true) {
      $.post('secciones/mantenimiento/mail.php', {
        telephone: telefono.val(),
        email: correo.val(),
        contactFormSubmitted: 'yes'
      },
      function(data) {
        $("#mensaje_res").html(data);
      })
      return false
    }
    //
  });
}

function toggleInput() {
  //borderDefault
  $("#boton-seleccion-1").css({"border-bottom":"solid 1px rgba(255,255,255,1)","font-weight":"bolder"})
  //
  $("#boton-seleccion-1, #boton-seleccion-2").on('click', function() {
    if($("#seleccionado-2").hasClass('hidden')) {
      $("#tel").removeAttr('required',false)
      $("#email").attr('required',true)
      $("#seleccionado-1, #seleccionado-2").toggleClass('hidden')
      // $(".boton_input div").toggleClass("color-blanco-bg color-primario-0")
      $("#boton-seleccion-2").css({"border-bottom":"solid 1px rgba(255,255,255,1)","font-weight":"bolder"})
      $("#boton-seleccion-1").css({"border-bottom":"solid 1px rgba(255,255,255,0.5)","font-weight":"lighter"})
    } else if($("#seleccionado-1").hasClass('hidden')) {
      $("#email").removeAttr('required',false)
      $("#tel").attr('required',true)
      $("#seleccionado-1, #seleccionado-2").toggleClass('hidden')
      // $(".boton_input div").toggleClass("color-blanco-bg color-primario-0")
      $("#boton-seleccion-1").css({"border-bottom":"solid 1px rgba(255,255,255,1)","font-weight":"bolder"})
      $("#boton-seleccion-2").css({"border-bottom":"solid 1px rgba(255,255,255,0.5)","font-weight":"lighter"})
    }
  })
}
// fin landing Mantenimiento
