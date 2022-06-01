<?php include ('session.php');?>
<?php include ('head.php');?>

<?php
    require_once 'dbcon.php';
    require "phpmailer/PHPMailerAutoload.php";
    //require "phpmailer/class.smtp.php";
    //require "phpmailer/class.phpmailer".php'
    //Setup
                    // from mail 
    $sql = ("SELECT id_number,password,email FROM voters;");
   // $query = $conn->query("SELECT id_number,password,email FROM voters;");
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {

        while($x=mysqli_fetch_assoc($res))
            {
                $mail=new PHPMailer;
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = "cesraisoni@gmail.com";                     // SMTP username
                $mail->Password   = "E-Voting";                             // SMTP password
                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
                //Recipients
                $mail->setFrom('cesraisoni@gmail.com','College Election System'); 
                $mail->addReplyTo('cesraisoni@gmail.com');
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Online Voting ID & Password';
            
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 
    
                $mail->Body    = '<b><center>Below are the credentials to login to the system </center></b><br>
                                     <center> <b> PRN ( Permanent Register Number) : '.$x['id_number'].' </b> </center><br>
                                     <center> <b> Password : '.$x['password'].' </b> </center>
                                     <center> <b> <h4> All the Best For Vote!!😊👍 </h4> </b> </center>
                                     ';
                $emailTo = $x['email'];
                //echo "<pre>"; print_r($emailTo); exit;
                $mail->addAddress($emailTo, $emailTo);
                $mail->send();
                $emailTo = '';
            }
    }
        // Content
        

       
        //$mail->'smtp,g';
        //close()
        header("location:voters.php");
?>