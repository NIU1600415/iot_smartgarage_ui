<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use MrShan0\PHPFirestore\FirestoreClient;

$pathname = basename($_SERVER['REQUEST_URI']);

require 'config.php';

$firestoreClient = new FirestoreClient($PROJECT_ID, $API_KEY, [
  'database' => '(default)',
]);
