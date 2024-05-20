<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $calculationResult = $_POST['calculationResult'];

    $to = $email;
    $subject = "Resultado dos Cálculos";
    $message = "Aqui está o resultado dos seus cálculos:\n\n" . $calculationResult;
    $headers = "From: noreply@seusite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "O resultado dos cálculos foi enviado para o seu e-mail.";
    } else {
        echo "Houve um problema ao enviar o e-mail.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
