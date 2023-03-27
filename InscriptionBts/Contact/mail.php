<link rel="stylesheet" href="./css/bootstrap.min.css">

<?php
    use PHPMailer\PHPMailer\PHPMailer;
    if(isset($_POST['name']) && isset($_POST['email'])){
        $nom     = $_POST['name'];
        $email   = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        require_once("./PHPMailer/src/Exception.php");
        require_once("./PHPMailer/src/PHPMailer.php");
        require_once("./PHPMailer/src/SMTP.php");

        $mail = new PHPMailer(true);

        $mail ->isSMTP();
        $mail ->Host = 'smtp.gmail.com';
        $mail ->SMTPAuth = true;
        $mail ->Username = "centrebtsm6@gmail.com";
        $mail ->Password = 'kqyioabmoenzawky'; 
        $mail ->SMTPSecure = 'tls';
        $mail ->Port = '587';
        $mail ->setFrom("$email");
        $mail ->addAddress('centrebtsm6@gmail.com');
        $mail ->isHTML(true);
        $mail ->Subject = 'Message received from contact '.$nom;
        $mail ->Body = 'Nom Complet : '. $nom. '<br>'.'Email :'.$email.'<br>'.'Sujet :'.$subject.'<br>'.'Votre Message :'.$message ;
        if($mail ->send()){ 
            $statue = 'success';
            $response = "Votre est message est envoyer avec succes";
        }
        else{ 
            $statue = 'failed';
            $response = "Votre message n'est pas envoyer" . $mail ->ErrorInfo;
        }
        exit(json_encode(array("Etat : " => $statue, "Réponse : "=>$response)));
    
    }
    ?>




























































<!--
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

        // Configure SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth   = true;             // Enable SMTP authentication
        $mail->Username   = 'centrebtsm6@gmail.com'; // SMTP username
        $mail->Password   = 'Mohammed6@@'; // SMTP password
        $mail->SMTPSecure = 'tls';            // Enable TLS encryption
        $mail->Port       = 587;              // TCP port to connect to

        // Set email content
        $mail->setFrom($email, $name);
        $mail->addAddress('yassinehanach85@example.com'); // Add recipient
        $mail->addReplyTo($email, $name);
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Send email
        if($mail->send()){
            $alert = "<div class = 'alert-succes'><span>Votre Message est envoyer avec succès </span></div>";
        }else{
            $alert = "<div class = 'alert-error'><span>Votre Message n'est pas envoyer </span></div>";
        }   
    }-->