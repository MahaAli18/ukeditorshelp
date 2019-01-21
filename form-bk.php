<?php

// Email address verification
function isEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'info@ukeditorshelp.co.uk';

    $name = addslashes(trim($_POST['name']));
    $clientEmail = addslashes(trim($_POST['email']));
    $clientNumber = addslashes(trim($_POST['phone']));
    $subject = "Dissertation Writting";
    $message = addslashes(trim($_POST['message']));

    $array = array('nameMessage' => '', 'emailMessage' => '', 'ContactMessage' => '', 'subjectMessage' => '',  'messageMessage' => '');

    if($name == '') {
    	$array['nameMessage'] = 'Empty name!';
    }
    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($clientNumber == '') {
        $array['ContactMessage'] = 'Invalid number!';
    }

    if($subject == '') {
        $array['subjectMessage'] = 'Empty subject!';
    }
    if($message == '') {
        $array['messageMessage'] = 'Empty message!';
    }
    if($name != '' && isEmail($clientEmail) && $clientNumber != '' && $subject != '' && $message != '') {		
		// Send email
		$message = "Message from:  " . $name . "\n\n\n\n\n\n\n\n\n\n" . "Message:  ". $message. "\n\n\n\n\n\n\n\n\n\n" . "Contact Number: " .$clientNumber;
              	$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
		mail($emailTo, $subject . " (Offer)", $message, $headers);
    }

  //  echo json_encode($array);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>UK EditorsHelp</title>
     <!--<link rel="stylesheet" href="css/style.css">-->
       <style>
 .swal-overlay {
  background-color:rgb(66, 65, 65);
}

   .swal-modal {
  background-color:  #ce4545;
   border: 3px solid black;
  }

  .swal-text {
  color:black;
  padding: 17px;
  text-align: center;
   }

  .swal-button{
   color:#ce4545;
   background-color:rgb(66, 65, 65);
   }
  .swal-title{
   color:white;
}

  </style>

</head>
<body>
</body>

<script>
   swal('THANKYOU!', 'We have received your query. You should hear from us within the next 24 hours.')
   
.then((value) => {
window.location.href = "http://www.ukeditorshelp.co.uk"  
});
</script>

</html>