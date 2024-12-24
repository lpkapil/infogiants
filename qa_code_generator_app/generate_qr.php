<?php
// Include the PHP QR Code library (make sure it's included properly)
include('phpqrcode/qrlib.php');

// Function to validate URL
function is_valid_url($url) {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

// Check if form is submitted and the input is available
if (isset($_POST['qrData']) && !empty($_POST['qrData'])) {
    $data = trim($_POST['qrData']); // Get the input data
    $maxLength = 1000; // Maximum length of the input data
    $errorCorrectionLevel = 'L'; // L is low error correction
    $matrixPointSize = 10; // Size of the QR code

    // Validate input length
    if (strlen($data) > $maxLength) {
        die("Error: Input is too long. Maximum length allowed is {$maxLength} characters.");
    }

    // Validate if input is a valid URL or text (you can adjust this based on your needs)
    if (!is_valid_url($data) && !preg_match('/^[A-Za-z0-9\s,;.!?&()\-]+$/', $data)) {
        die("Error: Invalid input. Only valid URLs or plain text allowed.");
    }

    // Sanitize input by removing special characters that could be used maliciously
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    
    // Block suspicious or malicious URLs (you can add more checks as needed)
    $blacklist = ['example.com', 'malicious.com', 'phishing.com']; // Add more if needed
    foreach ($blacklist as $blocked_domain) {
        if (strpos($data, $blocked_domain) !== false) {
            die("Error: The URL contains a blocked domain.");
        }
    }

    // Generate the QR code
    $file = 'qrcode.png'; // Path to save the QR code image
    QRcode::png($data, $file, $errorCorrectionLevel, $matrixPointSize);

    // Trigger the download of the QR code image
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="qrcode.png"');
    readfile($file); // Output the file for download

    // Clean up the generated file (optional)
    unlink($file); // Delete the temporary image file after download
    exit;
} else {
    echo "Error: No data provided!";
}
?>
