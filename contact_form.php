<?php
header('Content-Type: application/json');

// Start session for CAPTCHA
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Function to write data to CSV file
// Writes data from row 2 onwards, keeping row 1 as headers
function writeToCsv($data, $filename = 'contact_from_website.csv') {
    $filepath = __DIR__ . '/' . $filename;
    
    // Log function call for debugging
    error_log("writeToCsv called. File: $filepath, Data keys: " . implode(',', array_keys($data)));
    
    // Check if file exists
    $fileExists = file_exists($filepath);
    
    // Expected headers - id and customer_id empty, then data columns, then created_at and updated_at empty
    $headers = [
        'id', // Column A - empty (will remain empty)
        'customer_id', // Column B - empty (will remain empty)
        'date',
        'time',
        'customer_name',
        'company_name',
        'primary_contact',
        'email_id',
        'city',
        'product_category',
        'requirement',
        'source',
        'assigned_to',
        'customer_type',
        'status',
        'comments',
        'created_at', // Empty (will remain empty)
        'updated_at' // Empty (will remain empty)
    ];
    
    // Check if directory is writable
    $dir = dirname($filepath);
    if (!is_writable($dir) && $fileExists && !is_writable($filepath)) {
        error_log("Directory or file not writable: $filepath");
        return false;
    }
    
    // Get file size before writing
    $fileSizeBefore = $fileExists ? filesize($filepath) : 0;
    
    // Open file in append mode (creates file if it doesn't exist)
    $file = @fopen($filepath, 'a');
    
    if ($file === false) {
        $error = error_get_last();
        error_log("Failed to open CSV file: $filepath. Error: " . ($error ? $error['message'] : 'Unknown'));
        return false;
    }
    
    // Acquire exclusive lock
    if (!flock($file, LOCK_EX)) {
        fclose($file);
        error_log("Failed to lock CSV file: $filepath");
        return false;
    }
    
    // If file is new or empty, write header row
    if (!$fileExists || $fileSizeBefore == 0) {
        // Write BOM for UTF-8 Excel compatibility
        fwrite($file, "\xEF\xBB\xBF");
        // Write headers
        fputcsv($file, $headers);
    }
    
    // Escape special characters in data
    $escapeData = function($value) {
        if (is_null($value)) {
            return '';
        }
        $value = (string)$value;
        // Replace newlines with spaces for CSV compatibility
        $value = str_replace(["\r\n", "\r", "\n"], ' ', $value);
        return $value;
    };
    
    // Write data row - id and customer_id empty, then data, then created_at and updated_at empty
    $row = [
        '', // id - empty
        '', // customer_id - empty
        $escapeData($data['date']),
        $escapeData($data['time']),
        $escapeData($data['customer_name']),
        $escapeData($data['company_name']),
        $escapeData($data['primary_contact']),
        $escapeData($data['email_id']),
        $escapeData($data['city']),
        $escapeData($data['product_category']),
        $escapeData($data['requirement']),
        $escapeData($data['source']),
        $escapeData($data['assigned_to']),
        $escapeData($data['customer_type']),
        $escapeData($data['status']),
        $escapeData($data['comments']),
        '', // created_at - empty
        ''  // updated_at - empty
    ];
    
    // Write the row
    $written = fputcsv($file, $row);
    
    if ($written === false) {
        error_log("Failed to write CSV row to file: $filepath");
        flock($file, LOCK_UN);
        fclose($file);
        return false;
    }
    
    // Force flush to ensure data is written immediately
    if (!fflush($file)) {
        error_log("Warning: Failed to flush CSV file: $filepath");
    }
    
    // Release lock and close file
    flock($file, LOCK_UN);
    fclose($file);
    
    // Verify the data was written by checking file size increased
    clearstatcache(true, $filepath);
    $fileSizeAfter = file_exists($filepath) ? filesize($filepath) : 0;
    
    if ($fileSizeAfter <= $fileSizeBefore && $fileSizeBefore > 0) {
        error_log("Warning: File size did not increase after write. Before: $fileSizeBefore bytes, After: $fileSizeAfter bytes. File: $filepath");
        // Still return true if we got a write result, as the data might be there
    }
    
    // Log success for debugging
    error_log("CSV write successful. File: $filepath, Row written: " . implode(',', array_slice($row, 0, 5)) . '...');
    
    return true;
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CAPTCHA
    $captcha_answer = isset($_POST['captcha_answer']) ? trim($_POST['captcha_answer']) : '';
    $captcha_result = isset($_SESSION['captcha_result']) ? $_SESSION['captcha_result'] : null;
    
    if (empty($captcha_answer) || $captcha_result === null || (int)$captcha_answer !== (int)$captcha_result) {
        unset($_SESSION['captcha_result']);
        unset($_SESSION['captcha_question']);
        
        echo json_encode([
            'success' => false,
            'message' => 'Invalid CAPTCHA answer. Please try again.'
        ]);
        exit;
    }
    
    unset($_SESSION['captcha_result']);
    unset($_SESSION['captcha_question']);
    
    // Sanitize and validate input
    $customer_name = trim($_POST['customer_name'] ?? '');
    $company_name = trim($_POST['company_name'] ?? '');
    $primary_contact = trim($_POST['primary_contact'] ?? '');
    $email_id = filter_var(trim($_POST['email_id'] ?? ''), FILTER_VALIDATE_EMAIL);
    $city = trim($_POST['city'] ?? '');
    $product_category = trim($_POST['product_category'] ?? '');
    $requirement = trim($_POST['requirement'] ?? '');
    $source = 'Website';
    $assigned_to = '';
    $customer_type = trim($_POST['customer_type'] ?? '');
    $status = 'New';
    $comments = trim($_POST['comments'] ?? '');
    
    // Validation
    $errors = [];
    if (empty($customer_name)) $errors[] = 'Customer name is required';
    if (empty($primary_contact)) $errors[] = 'Primary contact is required';
    if (!$email_id) $errors[] = 'Valid email address is required';
    if (empty($city)) $errors[] = 'City is required';
    
    if (!empty($errors)) {
        echo json_encode([
            'success' => false,
            'message' => implode('. ', $errors)
        ]);
        exit;
    }
    
    // Prepare data for CSV - Date in yyyy-mm-dd format
    $currentDate = date('Y-m-d');
    $currentTime = date('H:i:s');
    
    $csvData = [
        'date' => $currentDate,
        'time' => $currentTime,
        'customer_name' => $customer_name,
        'company_name' => $company_name,
        'primary_contact' => $primary_contact,
        'email_id' => $email_id,
        'city' => $city,
        'product_category' => $product_category,
        'requirement' => $requirement,
        'source' => $source,
        'assigned_to' => $assigned_to,
        'customer_type' => $customer_type,
        'status' => $status,
        'comments' => $comments
    ];
    
    // Write to CSV file
    $filepath = __DIR__ . '/contact_from_website.csv';
    $writeResult = writeToCsv($csvData);
    
    if ($writeResult) {
        // Verify file was actually written
        clearstatcache(true, $filepath);
        if (file_exists($filepath)) {
            $fileContent = file_get_contents($filepath);
            $lastLine = substr($fileContent, strrpos($fileContent, "\n", -2) ?: 0);
            error_log("CSV write successful. Last line: " . substr($lastLine, 0, 100));
        }
        
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for contacting us! We will get back to you soon.'
        ]);
    } else {
        // Log the error for debugging
        $errorMsg = 'Unable to save your information. Please try again later.';
        
        // Check specific issues
        if (!is_writable(dirname($filepath))) {
            $errorMsg .= ' (Directory not writable: ' . dirname($filepath) . ')';
        } elseif (file_exists($filepath) && !is_writable($filepath)) {
            $errorMsg .= ' (File not writable: ' . $filepath . ')';
        } elseif (!file_exists($filepath)) {
            $errorMsg .= ' (File could not be created: ' . $filepath . ')';
        }
        
        error_log("CSV write failed. File: $filepath, Directory writable: " . (is_writable(dirname($filepath)) ? 'yes' : 'no') . ", File exists: " . (file_exists($filepath) ? 'yes' : 'no') . ", File writable: " . (file_exists($filepath) && is_writable($filepath) ? 'yes' : 'no'));
        error_log("CSV write failed. Data: " . print_r($csvData, true));
        
        echo json_encode([
            'success' => false,
            'message' => $errorMsg
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
}
?>
