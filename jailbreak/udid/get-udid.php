<?php
// URL of the .mobileconfig file
$mobileconfigUrl = 'https://canvastechnology.github.io/jailbreak/udid/UDID.mobileconfig';

// Get the contents of the .mobileconfig file
$mobileconfigContent = file_get_contents($mobileconfigUrl);

// Check if the content was fetched successfully
if ($mobileconfigContent !== false) {
    // Set the content type to the correct MIME type
    header('Content-Type: application/x-apple-aspen-config');
    header('Content-Disposition: attachment; filename="config.mobileconfig"');
    header('Content-Length: ' . strlen($mobileconfigContent));

    // Output the file content
    echo $mobileconfigContent;
    exit;
} else {
    // Handle the error if the file could not be fetched
    header("HTTP/1.0 404 Not Found");
    echo "Could not fetch the configuration file.";
    exit;
}
?>
