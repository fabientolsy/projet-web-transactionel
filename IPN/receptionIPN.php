<?php 
require('PaypalIPN.php');
$ipn = new PaypalIPN();

// Use the sandbox endpoint during testing.
$ipn->useSandbox();
/*
$verified = $ipn->verifyIPN();
if ($verified) {
	
	
	
}
*/

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");
//echo "test";