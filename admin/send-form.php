
<?php 
// $bride_name 		= utf8_decode($_POST['bride_name']);
// 		$groom_name 	= utf8_decode($_POST['groom_name']);
// 		$mobile_number		= utf8_decode($_POST['mobile_number']);
		$email_id 	= utf8_decode($_POST['too']);
		$event_name 	= utf8_decode($_POST['subject']);
		$assunto 	= 'Cloud Tower';
		$event_date=utf8_decode($_POST['message']);
		// $event_place=utf8_decode($_POST['event_place']);
		// $about_us=utf8_decode($_POST['about_us']);
 require_once('phpmailer/PHPMailerAutoload.php');

		$mail = new PHPMailer();
		$mail->SetLanguage("br");
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "naveenmass0007@gmail.com";
    $mail->Password = "Srinavin3003";
    $mail->SMTPSecure = "tls";  
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "587";
 
    $mail->setFrom('naveenmass0007@gmail.com', 'Admin');
    $mail->AddAddress(	$email_id , 'Admin');
 
    $mail->Subject  = $event_name;
    $mail->IsHTML(true);
    $mail->Body = $event_date;
  
     if($mail->Send())
     {
       			 echo'
		<script>
			$(document).ready(function(){
				swal("Success ...", "Your Request Successfully Sented. \n We Will Reply Soon", "success")
			});
		</script>';

     }
     else
     {
        echo'
			<script>
				$(document).ready(function(){
					swal("Ops ...","Went Some Wrong!", "error");
				});
			</script>';
     }
  
?>
