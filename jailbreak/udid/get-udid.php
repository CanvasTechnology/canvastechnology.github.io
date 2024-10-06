<?php
// Check if the UDID is sent via a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the UDID from the request
    $udid = $_POST['udid'] ?? 'No UDID received';

    // Log or handle the UDID as needed
    file_put_contents('udid_log.txt', $udid . PHP_EOL, FILE_APPEND);
    echo "UDID received: " . htmlspecialchars($udid);
} else {
    echo "No UDID received.";
}
?>
