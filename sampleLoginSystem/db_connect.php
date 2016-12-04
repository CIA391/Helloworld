<?php
$db = new mysqli (
    'us-cdbr-azure-southcentral-f.cloudapp.net',
    'bf9afe7c1df5c8',
    '5d557954',
    'acsm_0dd8805538e55e7'
);
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}
