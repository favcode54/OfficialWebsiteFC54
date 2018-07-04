<?php
	$to = 'favour@favcode54.org';

	
	if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])) {

		$subject = ucwords($_POST['name']).' - [Enquiry from favcode.org]';
		$message = '<div style="font-family: Segoe UI, Calibri, Helvetica, Helvetica Neue, sans-serif, monospace;width: 90%;padding:30px"><img src="https://favcode54.org/images/cwf2.png" width="200" /><br><br><br><b style="font-family: 1.2em">Message from:</b> '.$_POST['name'].'<br><small><i>('.$_POST['email'].')</i></small><br><br><p style="font-size:1.4em; font-weight:lighter;"">'.$_POST['message'].'</p></div>';
		$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$m = imap_mail($to, $subject, $message, $headers);
		if ($m) {
			$response['result'] = 'success';
			$response['Status'] = 200;
			echo json_encode($response);
		}
		else{
			$response['result'] = 'error';
			$response['Status'] = 500;
			echo json_encode($response);
		}
	}
?>