<?php
// Name filter for headers insertion:
function filter_name( $input ) {
	$rules = array( "\r" => '', "\n" => '', "\t" => '', '"'  => "'", '<'  => '[', '>'  => ']' );
	$name = trim( strtr( $input, $rules ) );
	return $name;
}

// Email filter for headers insertion:
function filter_email( $input ) {
	$rules = array( "\r" => '', "\n" => '', "\t" => '', '"'  => '', ','  => '', '<'  => '', '>'  => '' );
	$email = strtr( $input, $rules );
	return $email;
}

// Post processing:
if(isset($_POST['form'])){
	// Decode json from post:
	$form = json_decode($_POST['form']);

	// Message headers:
	$headers = array();
	$headers[] = 'From: hello@magnet.cl';
	$headers[] = 'Bcc: ignacio@magnet.cl';
	$headers[] = 'Bcc: wooo@magnet.cl';
	$headers[] = 'Reply-To: "'.filter_name($form->name).'"<'.filter_email($form->email).'>';
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/html; charset=iso-8859-1";
	
	// To, subject and message:
	$to = 'hello@magnet.cl';
	$subject = 'Contact from magnet.cl';
	$message = htmlentities($form->message, ENT_QUOTES, 'ISO-8859-1');
	$message = '<html><head><title>'.$subject.'</title></head><body>'.$message.'</body></html>';

	// Send email:
	$isOk = mail($to, $subject, $message, implode("\r\n", $headers));

	// Print feedback:
	if($isOk){
		print("success");
	}else{
		print("tryLater");
	}
}else{
	// Try to parse route:
	$params = array();
	if(isset($_GET['action']))
	{
		$params = explode('/',$_GET['action']);
	}
	else
	{
		// Default view:
		$params[]='home';
	}

	// Valid routing:
	switch ($params[0]) {
		case 'home':
		case 'rules':
			require('views/'.$params[0].'.tpl.php');
			break;
		default:
			require('views/home.tpl.php');
			break;
	}
}
?>