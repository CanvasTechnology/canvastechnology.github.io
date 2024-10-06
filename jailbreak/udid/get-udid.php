<?php
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the UDID from the POST data
    $udid = isset($_POST['UDID']) ? $_POST['UDID'] : null;
    
    // If the UDID is available, store it or process it
    if ($udid) {
        // Example: Save the UDID to a file (append)
        file_put_contents('udids.txt', $udid . PHP_EOL, FILE_APPEND);
        
        // Return a success message
        echo "UDID captured successfully!";
    } else {
        echo "No UDID received.";
    }
} else {
    echo "Invalid request method.";
}
?>
