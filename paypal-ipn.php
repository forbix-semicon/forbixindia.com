<?php
// PayPal IPN listener script (basic, production-ready)
// Place this file at your public web root and set your PayPal IPN URL to point here.
// For security, always verify the IPN with PayPal before processing orders.

// STEP 1: Read POST data from PayPal
$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);
$myPost = array();
foreach ($raw_post_array as $keyval) {
    $keyval = explode('=', $keyval);
    if (count($keyval) == 2) {
        $myPost[$keyval[0]] = urldecode($keyval[1]);
    }
}

// STEP 2: Build the required acknowledgement message
$req = 'cmd=_notify-validate';
foreach ($myPost as $key => $value) {
    $value = urlencode($value);
    $req .= "&$key=$value";
}

// STEP 3: Post IPN data back to PayPal for validation
$paypal_url = (isset($_POST['test_ipn']) && $_POST['test_ipn'] == 1)
    ? 'https://ipnpb.sandbox.paypal.com/cgi-bin/webscr'
    : 'https://ipnpb.paypal.com/cgi-bin/webscr';

$ch = curl_init($paypal_url);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
$res = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// STEP 4: Inspect PayPal's response and act accordingly
if ($res === 'VERIFIED' && $http_code == 200) {
    // TODO: Validate payment details (amount, currency, receiver_email, etc.)
    // TODO: Check txn_id is unique (not previously processed)
    // TODO: Mark order as paid, send confirmation, etc.
    file_put_contents(__DIR__ . '/ipn.log', date('c') . " VERIFIED: " . print_r($_POST, true) . "\n", FILE_APPEND);
} else {
    // Invalid IPN
    file_put_contents(__DIR__ . '/ipn.log', date('c') . " INVALID: " . print_r($_POST, true) . "\n", FILE_APPEND);
}

// Always respond with 200 OK
header('HTTP/1.1 200 OK');
exit;
