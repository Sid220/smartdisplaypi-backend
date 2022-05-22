<?php
require_once 'vendor/autoload.php';
header('Content-Type: application/json');

use Buchin\GoogleSuggest\GoogleSuggest;
if(isset($_GET['q'])){
    $suggested = GoogleSuggest::grab(urldecode($_GET['q']));
    echo json_encode($suggested);
}
else {
    echo json_encode([]);
}
