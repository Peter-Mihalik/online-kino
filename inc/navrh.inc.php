<?php
if (isset($_POST['submit'])) {
            include 'db.inc.php';
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $csfd = mysqli_real_escape_string($conn, $_POST['csfd']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $date = date('Y-m-d H:i:s');
    if ( empty($_POST['name']) || empty($_POST['csfd']) || empty($_POST['email']) ) {
        header("Location: ../navrh.php?error1=true");
    }
    else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "INSERT INTO navrhy(nName, nCsfd, nDate, nStatus) VALUES('$name', '$csfd', '$date', '0')";
            mysqli_query($conn, $sql);
            mail('main@peter-mihalik.com', 'Navrh pre novy film', "Mas navrh pre novy film: \n 
            Nazov: $name \n
            Csfd link: $csfd \n
            E-mail navrhujuceho: $email");
            header("Location: ../navrh.php?succes=true");
        }
        else {
            header("Location: ../navrh.php?error2=true");
        }
    }
}
?>