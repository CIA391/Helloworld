<?php

define('DB_SERVER', 'us-cdbr-azure-southcentral-f.cloudapp.net');
define('DB_USERNAME', 'bf9afe7c1df5c8');
define('DB_PASSWORD', '5d557954');
define('DB_DATABASE', 'database');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);