<?php
namespace app\components\mailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    const USER_NAME = "igorkryvoruchkotest@gmail.com";
    const PASSWORD = "mikhailperia";
    private $mailBody;

    public function createBody($data){
        $tableData = "";
        foreach ($data as $key => $value){
            $tableData += "
                <tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>
            ";
        }
        $this->mailBody = "
            <table> 
                $tableData
            </table>
        ";
        return $this->mailBody;
    }

    public function sendEmail($data)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = self::USER_NAME;                        // SMTP username
            $mail->Password   = self::PASSWORD;                         // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom(self::USER_NAME, 'Self');
            $mail->addAddress('igor.kryvoruchko.88@gmail.com', 'Igor');     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = $this->mailBody;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}