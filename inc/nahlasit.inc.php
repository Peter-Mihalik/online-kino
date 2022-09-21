<?php
if (isset($_POST['submit'])) {
            include 'db.inc.php';
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $date = date('Y-m-d H:i:s');
    if ( empty($_POST['name']) ||empty($_POST['email']) ) {
        header("Location: ../nahlasit.php?error1=true");
    }
    else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            mail('main@peter-mihalik.com', 'Nahlasenie nefunkcneho filmu', "Nefunkcny film: \n 
            Nazov: $name \n
            E-mail navrhujuceho: $email");
            mail("$email", "Nahlasenie nefunkčného filmu", "Dakujeme za nahlasenie nefunkcneho filmu.
            film bude coskoro skontrolovany a chyby nasledne opravene.", "From: main@online-kino.online");
            header("Location: ../nahlasit.php?succes=true");
        }
        else {
            header("Location: ../nahlasit.php?error2=true");
        }
    }
}
?>