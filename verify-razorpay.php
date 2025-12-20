<?php
// Razorpay payment verification endpoint
// Install Razorpay PHP SDK via Composer: composer require razorpay/razorpay

// Return JSON for all responses
header('Content-Type: application/json; charset=utf-8');

// Locate Composer autoload
$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Autoload file not found. Run "composer install" to install dependencies.'
    ]);
    exit;
}
require_once $autoload;

use Razorpay\Api\Api;

// TODO: replace with your actual keys or load from a secure config
$api_key = 'YOUR_KEY_ID'; // Replace with your Razorpay Key ID
$api_secret = 'YOUR_KEY_SECRET'; // Replace with your Razorpay Key Secret

$data = json_decode(file_get_contents('php://input'), true);
$payment_id = isset($data['payment_id']) ? trim($data['payment_id']) : '';
$amount = isset($data['amount']) ? (float)$data['amount'] : 0.0;

if ($payment_id === '' || $amount <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid payment_id or amount']);
    exit;
}

$api = new Api($api_key, $api_secret);

try {
    $payment = $api->payment->fetch($payment_id);
    // Razorpay stores amount in paise (i.e. amount * 100)
    $expectedAmount = (int)round($amount * 100);
    if ($payment->status === 'captured' && (int)$payment->amount === $expectedAmount) {
        // Payment is successful and amount matches
        // Save order to database, send confirmation, etc.
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Payment not captured or amount mismatch']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
