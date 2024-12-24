<?php
// Set maximum file size to 1MB (1 * 1024 * 1024 bytes)
define('MAX_FILE_SIZE', 1 * 1024 * 1024); 

// Allowed image formats
$allowed_formats = ['image/jpeg', 'image/png'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    // Check if file is uploaded
    $image = $_FILES['image'];

    // Validate image size
    if ($image['size'] > MAX_FILE_SIZE * 5) { // Allow file to be up to 5MB initially
        die("Error: The file is too large. Maximum file size is 5MB.");
    }

    // Validate image format
    if (!in_array($image['type'], $allowed_formats)) {
        die("Error: Only JPG and PNG images are allowed.");
    }

    // Get image information
    $image_info = getimagesize($image['tmp_name']);
    if ($image_info === false) {
        die("Error: File is not a valid image.");
    }

    // Create an image resource based on the file type (JPEG or PNG)
    $image_resource = null;
    if ($image['type'] == 'image/jpeg') {
        $image_resource = imagecreatefromjpeg($image['tmp_name']);
    } elseif ($image['type'] == 'image/png') {
        $image_resource = imagecreatefrompng($image['tmp_name']);
    }

    // If the image resource is not created, show an error
    if ($image_resource === null) {
        die("Error: Failed to create image from file.");
    }

    // Start output buffering to capture the image data
    ob_start();

    // Compress the image in memory
    $compressed_image = null;
    if ($image['type'] == 'image/jpeg') {
        // Compress JPEG to 50% quality for smaller file size
        imagejpeg($image_resource, null, 50); // You can adjust the quality (0-100)
    } elseif ($image['type'] == 'image/png') {
        // Compress PNG to the highest level (level 9)
        imagepng($image_resource, null, 9); // PNG compression level (0-9)
    }

    // Get the compressed image content from the output buffer
    $compressed_image = ob_get_contents();

    // End output buffering
    ob_end_clean();

    // If the compressed image size is still too large, reduce quality further
    if (strlen($compressed_image) > MAX_FILE_SIZE) {
        // For JPEG, further reduce quality, for PNG, you could try an alternative compression technique
        if ($image['type'] == 'image/jpeg') {
            ob_start();
            imagejpeg($image_resource, null, 40); // Try 40% quality for more compression
            $compressed_image = ob_get_contents();
            ob_end_clean();
        }
    }

    // Send headers for the image download
    header('Content-Type: ' . $image['type']);
    header('Content-Disposition: attachment; filename="compressed_image.' . pathinfo($image['name'], PATHINFO_EXTENSION) . '"');
    header('Content-Length: ' . strlen($compressed_image));

    // Output the compressed image content
    echo $compressed_image;

    // Clean up the image resource
    imagedestroy($image_resource);
    exit;
} else {
    echo "Error: No image uploaded.";
}
?>
