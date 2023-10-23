<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'sarahpancierisite@gmail.com';

$email_subject = 'Novo Pedido';

$email_body = "Nome do Usuario: %name.\n" .
    "Email do Usuario: %visitor_email.\n" .
    "Tipo: %subject.\n" .
    "Mensagem: %message.\n";

$to = 'sarahpancieri@gmail.com';

$headers = "De: $email_from \r\n";

$headers = "Reponder-Para: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Local: contact.html")

    ?>