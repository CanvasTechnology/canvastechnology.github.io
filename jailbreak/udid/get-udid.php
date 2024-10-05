<?php
header('Content-Type: application/json');
$udid = $_POST['UDID'] ?? '';
$imei = $_POST['IMEI'] ?? '';
$iccid = $_POST['ICCID'] ?? '';
$version = $_POST['VERSION'] ?? '';
$product = $_POST['PRODUCT'] ?? '';

// Do something with the UDID and other info
$response = [
   'UDID' => $udid,
   'IMEI' => $imei,
   'ICCID' => $iccid,
   'VERSION' => $version,
   'PRODUCT' => $product,
];

echo json_encode($response);
?>
