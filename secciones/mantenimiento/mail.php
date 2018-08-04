<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

  if(isset($_POST['contactFormSubmitted'])) {
    $email = $_POST['email'];
    $phone = $_POST['telephone'];

    // if (strlen($phone) < 5) {
    //   // exit("Necesitamos 10 números en tu teléfono.");
    //   echo "<script>$('#formResponse').html('Necesitamos mas de 5 números en tu teléfono.'); </script>";
    // }

    $formcontent="Hay que contactar a: \n\nTeléfono: $phone\n\nCorreo: $email\n\n";
    $message = wordwrap($formcontent, 70, "\r\n");
    $recipient = "";//correo aqui
    $subject = "Contacto WAD!";
    $mailheader = "De: $email \r\n";
    mail($recipient, $subject, $message, $mailheader) or die("Algo ha salido mal, intente nuevamente.");
    echo "<script>$('#formResponse').html('Gracias! tu correo se ha enviado exitosamente. Te contactaremos en breve.'); </script>";
  }

}
