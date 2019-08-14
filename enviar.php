<?php
   
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $area = $_POST['area'];
    $comments = $_POST['comments'];
    $content = '<br>First Name: ' . $name . '<br>Last Name: ' . $lastname . '<br>E-mail: ' . $email . '<br>Telephone Number' . $telephone . '<br>Area approx: ' . $area . '<br>Comments: ' . $comments;
    

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';


    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                      // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'mmpaintingmn.llc@gmail.com';           // SMTP username
        $mail->Password   = 'mmpaintingllc01';                    // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($email);     // Add a recipient
        $mail->addReplyTo($email);


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Free estimate';
        $mail->Body    = $content;
        $mail->Charset = 'UTF-8';

        $mail->send();
        echo ("
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@8'></script>
            <script>
                Swal.fire({
                    title: 'Your estimate has been send',
                    text: '¡Thank you!'
                });

                function redirect() {
                    window.location='contact.html';
                }
                setTimeout('redirect()',2000);
               
            </script>");

    } catch (Exception $e) {
        echo "Message could not be sent: {$mail->ErrorInfo}";
    }

?>