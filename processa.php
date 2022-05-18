<?php
    date_default_timezone_set('America/Sao_Paulo');

    require_once ('src/PHPMailer.php');
    require_once ('src/SMTP.php');
    require_once ('src/Exception.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer (true);

    try{
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aleefsoouza024@gmail.com';
        $mail->Password = 'Alef1234@,.';
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587;

        $mail->setFrom('aleefsoouza024@gmail.com');
        $mail->addAddress('aleefsoouza024@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'E-mail teste';
        $mail->Body = 'E-mail teste <strong>corpo</strong>';
        $mail->AltBody = 'E-mail teste corpo';

        if ($mail->send()) {
            echo 'E-mail enviado com sucesso';
        } else {
                echo 'E-mail não foi enviado';
        } 
        
        
    }catch (Exception $e){
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }