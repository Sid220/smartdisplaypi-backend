<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'vendor/autoload.php';

use Buchin\GoogleSuggest\GoogleSuggest;

$suggested = GoogleSuggest::grab(urldecode($_GET['q']));
echo json_encode($suggested);