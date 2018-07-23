<?php
//header('Content-type: application/json');
// Check for empty fields
//print_r($_POST); die();
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	 echo json_encode(array(
         "status" => false,
         "message" => "Algo deu errado, verifique suas informações."
     ));
     return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$email_subject = "Formulário de contato do site. Cliente: ".$name.".";
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'digital@megusta.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to. // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_body = "<b>Detalhes:</b> <br> <b>Nome:</b> ".$name."<br> <b>Email:</b> ".$email_address." <br> <b>Mensagem:</b> ".$message;

$headers .= "Content-Type: text/html; charset=UTF-8 \r\n";
$headers .= "Cc: rodrigo@megustadigital.com.br \r\n";
$headers .= "From: naoresponda@megusta.com.br\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
@mail($to,$email_subject,$email_body,$headers);
echo json_encode(array(
    "status" => true
));
return true;
?>