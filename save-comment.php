<?php
/**
 * Save Reader Comments Handler
 * Saves comments from blog articles to reader_comments.txt
 */

// Handle non-POST requests gracefully to avoid 4xx errors for crawlers
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Return 200 OK instead of 405 to prevent 4xx errors in search console
    header('Content-Type: application/json');
    header('X-Robots-Tag: noindex, nofollow');
    http_response_code(200);
    echo json_encode(['success' => false, 'message' => 'This endpoint only accepts POST requests']);
    exit;
}

header('Content-Type: application/json');
header('X-Robots-Tag: noindex, nofollow');

// Get the posted data
$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';
$blogUrl = isset($_POST['blog_url']) ? trim($_POST['blog_url']) : '';
$blogTitle = isset($_POST['blog_title']) ? trim($_POST['blog_title']) : '';

// Validate comment
if (empty($comment)) {
    echo json_encode(['success' => false, 'message' => 'Please write a comment before submitting.']);
    exit;
}

// Sanitize inputs
$comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');
$blogUrl = htmlspecialchars($blogUrl, ENT_QUOTES, 'UTF-8');
$blogTitle = htmlspecialchars($blogTitle, ENT_QUOTES, 'UTF-8');

// Format the date
$date = date('Y-m-d H:i:s');

// Create the comment entry
$entry = "================================================================================\n";
$entry .= "Date: " . $date . "\n";
$entry .= "Blog: " . $blogTitle . "\n";
$entry .= "URL: " . $blogUrl . "\n";
$entry .= "--------------------------------------------------------------------------------\n";
$entry .= "Comment:\n";
$entry .= $comment . "\n";
$entry .= "================================================================================\n\n";

// Path to the comments file
$filePath = __DIR__ . '/reader_comments.txt';

// Try to append the comment to the file
$result = file_put_contents($filePath, $entry, FILE_APPEND | LOCK_EX);

if ($result !== false) {
    echo json_encode([
        'success' => true, 
        'message' => 'Thank you! Your comment has been submitted successfully.'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Sorry, there was an error saving your comment. Please try again.'
    ]);
}
?>
