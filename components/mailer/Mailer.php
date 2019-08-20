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
            $tableData .= "
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
            $mail->IsSMTP();
            //$mail->SMTPDebug = 2;
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Port       = 465;
            $mail->Username   =  "igorkryvoruchkotest@gmail.com";   // SMTP username
            $mail->Password   = "mikhailpes6";                      // SMTP password



            //Recipients
            $mail->setFrom(self::USER_NAME, 'Self');
            $mail->addAddress('igor.kryvoruchko.88@gmail.com', 'Igor');     // Add a recipient
            $mail->addAddress('info@zina.design', 'Roman');
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = $this->createBody($data);
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}