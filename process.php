<?php
	
	session_start();

		if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['send'])) {
			// code...
			$userName = $_POST['userName'];
			$userEmail = $_POST['userEmail'];
			$userPhone = $_POST['userPhone'];
			$userMessage = $_POST['userMessage'];
			$toEmail = 'mikipary@gmail.com' . ',' . $userEmail;
			$subject = 'Confirmation Message';
			$mailHeader = "From: $userEmail";

			$mailBody = "Your information has been received. We will get back to you. Below is the summary of ur details \r\n" .
			"\r\n Name: " . $userName .
			"\r\n Email: " . $userEmail .
			"\r\n Phone: " . $userPhone .
			"\r\n Message: " . $userMessage . "\r\n";

			if (mail($toEmail, $subject, $mailBody, $mailHeader)) {
				$message = "Your information has been received";
				$_SESSION['message'] =  $message;		
				header("Location: index.php");
				
			}else {
				echo "Failed to send Email. Please check your network and try again!";
			}
		}


	?>