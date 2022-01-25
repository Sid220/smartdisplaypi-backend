<?php
# ini_set('display_errors', 1);
# ini_set('display_startup_errors', 1);
# error_reporting(E_ALL);

require_once 'vendor/autoload.php';

$pixabayClient = new \Pixabay\PixabayClient([
    'key' => file_get_contents('pixabay_key.txt'),
]);

// test it
$results = $pixabayClient->get(['q' => 'nature', 'image_type' => 'photo', 'safe_search' => 'true', 'orientation' => 'horizontal', 'editors_choice' => 'true', 'per_page' => 50], true);
// show the results
$random = array_rand($results['hits']);
echo $results["hits"][$random]['webformatURL'];