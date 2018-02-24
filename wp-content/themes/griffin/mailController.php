<?php 
	session_start();
	dd('test');
	$to = 'verhoevenwout@gmail.com';
	// $to = 'griffin.verept@gt-lawoffice.be';
	$subject = 'Griffin Verept Website';
	
	$successSessionIsSet = false;
	$errorSessionIsSet = false;
	$name = '';
	$email = '';
	$phoneNumber = '';
	$message = '';
	$spam = '';

	if (isset($_POST['send'])) {
		$spam = $_POST['botTest'];
		if ($spam) {
			die("No spamming allowed!"); 
		} else{
			if ( $_POST['name'] != '' && $_POST['email'] != '' && $_POST['message'] != ''){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$subject = $subject . ': ' . $email;
				$message = 'Name: ' . $name . "\r\n" . 'Email: ' . $email . "\r\n" . "\r\n" . 'Message: ' . "\r\n" . $_POST['message'];

				$headers .= 'Cc: ' . $email . "\r\n";
				mail($to, $subject , $message, $headers);
				$_SESSION['success'] = " Your email has been sent succesfully";
				// header("location: index.php");
			} else{
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$_SESSION['error'] = " Please fill in the blanks";
				header("location: index.php");
			}
		}	
	}
?>