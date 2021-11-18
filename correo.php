 <?php
 /* if (isset($_POST['botonEnviar'])) {

    if (!empty($_POST['nombreApellido']) && !empty($_POST['correoElectronico']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])) {
        $nombreApellido = $_POST['nombreApellido'];
        $correoElectronico = $_POST['correoElectronico'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $header = "From: itic18.daniel.solis@iunis.edu.mx" . "\r\n";
        $header.= "Reply-To: itic18.daniel.solis@iunis.edu.mx" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = mail($correoElectronico, $nombreApellido, $telefono, $mensaje);

        if ($mail) {
            echo "<h4>¡Correo enviado exitosamente!</h4>"
        }


    }
}

?>