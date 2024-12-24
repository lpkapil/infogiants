<?php
// Include the PHP QR Code library (make sure it's included properly)
include('phpqrcode/qrlib.php');

// Check if form is submitted and the input is available
if (isset($_POST['qrData']) && !empty($_POST['qrData'])) {
    $data = $_POST['qrData']; // Get the input data
    $file = 'qrcode.png'; // Path to save the QR code image

    // Error correction level and size of the QR code
    $errorCorrectionLevel = 'L'; // L is low error correction
    $matrixPointSize = 10; // Size of the QR code
    
    // Generate the QR code and save as an image
    QRcode::png($data, $file, $errorCorrectionLevel, $matrixPointSize);

    // Trigger the download of the QR code image
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="qrcode.png"');
    readfile($file); // Output the file for download

    // Clean up the generated file (optional)
    unlink($file); // Delete the temporary image file after download
    exit;
} else {
    echo "No data provided!";
}
?>
