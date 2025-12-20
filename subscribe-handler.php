<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    
    if ($email) {
        $file = 'subscriber_emails.txt';
        $current_date = date('Y-m-d H:i:s');
        $entry = $email . ' | ' . $current_date . "\n";
        
        if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX)) {
            echo json_encode(['success' => true, 'message' => 'Thank you for subscribing!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Unable to save subscription.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
