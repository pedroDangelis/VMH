<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

if (isset($_POST["enviar"])) {
  $mensagem = $_POST["mensagem"];
  // $from = $_POST["email"];

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'feedbacktestepit@gmail.com';
  $mail->Password = 'ijekxnqxprkjeauv';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->addAddress('pedrodangelis1@gmail.com', 'Teste');
  $mail->Subject = 'FeedBack';
  $mail->Body = $mensagem;

  if ($mail->send()) {
    echo 'E-mail enviado com sucesso!';
  } else {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FeedBack</title>
  <link rel="stylesheet" href="stylefeed.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="stylefeed.css">
</head>

<body>

  <a href="landingpage.php">Quem Somos</a>

  <a href="inicio">Página</a>

  <h1>FeedBack</h1>

  <div id="AreaBranca">
    <div class="form-container">
      <form class="form" method="POST">

        <div class="form-group">
          <label for="mensagem">Nos conte suas sugestões, avisos ou reclamações</label>
          <textarea id="textarea" rows="10" cols="50" required="" name="mensagem"></textarea>
          <!-- <label for="email">Digite seu email</label>
          <input id="textarea" required="" name="email" /> -->
        </div>

        <input class="form-submit-btn" type="submit" name="enviar" value="Enviar" />

      </form>
    </div>
  </div>

  <div id="background"></div>

</body>

</html>