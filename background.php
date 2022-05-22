<?php

require_once 'vendor/autoload.php';
header('Content-Type: text/plain; charset=utf-8');

$rand = random_int(0, 5);
if ($rand == 0) {
    getImage("sky");
} elseif ($rand == 1) {
    getImage("city");
} elseif ($rand == 2) {
    getImage("space");
} elseif ($rand == 3) {
    getImage("street");
} else {
    getImage("nature");
}
function getImage($search)
{
    $pixabayClient = new \Pixabay\PixabayClient([
        'key' => file_get_contents('pixabay_key.txt'),
    ]);
    // test it
    $results = $pixabayClient->get(['q' => $search, 'category' => 'backgrounds', 'image_type' => 'photo', 'safe_search' => 'true', 'orientation' => 'horizontal', 'editors_choice' => 'true', 'per_page' => 50], true);
    // show the results
    $random = array_rand($results['hits']);
    echo $results["hits"][$random]['largeImageURL'];
}