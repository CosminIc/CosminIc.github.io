<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['inputname'];
    $email = $_POST['inputemail'];
    $phone = $_POST['inputphone'];
    $company = $_POST['inputcompany'];
    $subject = $_POST['inputsubject'];
    $message = $_POST['inputmessage'];

    // SETEAZĂ AICI ADRESA TA DE EMAIL
    $to = "protservstalkat@gmail.com";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Ai primit un mesaj nou de la formularul de contact:\n\n";
    $fullMessage .= "Nume: $name\n";
    $fullMessage .= "Email: $email\n";
    $fullMessage .= "Telefon: $phone\n";
    $fullMessage .= "Companie: $company\n";
    $fullMessage .= "Subiect: $subject\n";
    $fullMessage .= "Mesaj:\n$message\n";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Mesaj trimis cu succes!";
    } else {
        echo "A apărut o eroare la trimiterea mesajului.";
    }
}
?>
