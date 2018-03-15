<?php
if ( !isset( $_SESSION ) ) session_start();
if ( !$_POST ) exit;
if ( !defined( "PHP_EOL" ) ) define( "PHP_EOL", "\r\n" );


$to = "contacto@ventiva.cl"; //yourmail@yourdomain.com
$subject = "Contacto con Ventiva";



foreach ($_POST as $key => $value) {
    if (ini_get('magic_quotes_gpc'))
        $_POST[$key] = stripslashes($_POST[$key]);
    $_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}

// Assign the input values to variables for easy reference
$name     = @$_POST["name"];
$email    = @$_POST["email"];
$phone    = @$_POST["phone"];
$message  = @$_POST["comment"];
$verify  = @$_POST["verify"];

/* Test input values for errors */
$errors = array();
/* php verif name */
if(isset($_POST["name"])){
 
        if (!$name) {
            $errors[] = "Debe ingresar un nombre.";
        } elseif(strlen($name) < 2)  {
            $errors[] = "El nombre debe tener al menos 2 caracteres.";
        }
}
/* php verif email */
if(isset($_POST["email"])){
    if (!$email) {
        $errors[] = "Debe ingresar un email.";
    } else if (!validEmail($email)) {
        $errors[] = "Debe ingresar un email válido.";
    }
}
/* php verif phone */
if(isset($_POST["phone"])){
    if (!$phone) {
        $errors[] = "Debe ingresar un número de teléfono correcto.";
    }elseif ( !is_numeric( $phone ) ) {
        $errors[]= 'Su número de teléfono sólo debe contener dígitos.';
    }
}


/* php verif comment */
if(isset($_POST["comment"])){
    if (strlen($message) < 10) {
        if (!$message) {
            $errors[] = "Debe ingresar un mensaje.";
        } else {
            $errors[] = "Mensaje debe tener al menos 10 caracteres.".strlen($message).$message;
        }
    }
}

/* php verif captcha */
if(isset($_POST["verify"])){
    if (!$verify) {
        $errors[] = "Debe ingresar el código de seguridad";
    } else if (md5($verify) != $_SESSION['nekoCheck']['verify']) {
        $errors[] = "El código de seguridad es incorrecta";
    }
}

if ($errors) {
    /* Output errors and die with a failure message */
    $errortext = "";
    foreach ($errors as $error) {
        $errortext .= '<li>'. $error . "</li>";
    }

    echo '<div class="alert alert-error">Ocurrieron los siguientes errores :<br><ul>'. $errortext .'</ul></div>';

}else{



    /* Send the email */
    $headers  = "From: $email" . PHP_EOL;
    $headers .= "Reply-To: $email" . PHP_EOL;
    $headers .= "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
    $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

    $mailBody  = "Datos de Contacto" . PHP_EOL . PHP_EOL;
	$mailBody .= "Nombre: " .$name. PHP_EOL;
	$mailBody .= "Email: " .$email. PHP_EOL;
	$mailBody .= "Telefono: " .$phone. PHP_EOL;
    $mailBody .= "Message :" . PHP_EOL;
    $mailBody .= $message . PHP_EOL . PHP_EOL;
    $mailBody .= "-------------------------------------------------------------------------------------------" . PHP_EOL;






    if(mail($to, $subject, $mailBody, $headers)){
        echo '<div class="alert alert-success">¡Éxito! Tu mensaje ha sido enviado.</div>
		<script>
			document.getElementById("name").value = "";
			document.getElementById("email").value = "";
			document.getElementById("phone").value = "";
			document.getElementById("comment").value = "";
			document.getElementById("verify").value = "";
		</script>';
    }
}

/* FUNCTIONS */
function validEmail($email) {
    $isValid = true;
    $atIndex = strrpos($email, "@");
    if (is_bool($atIndex) && !$atIndex) {
        $isValid = false;
    } else {
        $domain = substr($email, $atIndex + 1);
        $local = substr($email, 0, $atIndex);
        $localLen = strlen($local);
        $domainLen = strlen($domain);
        if ($localLen < 1 || $localLen > 64) {
            /* local part length exceeded */
            $isValid = false;
        } else if ($domainLen < 1 || $domainLen > 255) {
            /* domain part length exceeded */
            $isValid = false;
        } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
            /* local part starts or ends with '.' */
            $isValid = false;
        } else if (preg_match('/\\.\\./', $local)) {
            /* local part has two consecutive dots */
            $isValid = false;
        } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
            /* character not valid in domain part */
            $isValid = false;
        } else if (preg_match('/\\.\\./', $domain)) {
            /* domain part has two consecutive dots */
            $isValid = false;
        } else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
            /* character not valid in local part unless */
            /* local part is quoted */
            if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                $isValid = false;
            }
        }
        if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
            /* domain not found in DNS */
            $isValid = false;
        }
    }
    return $isValid;
}

?>
