<?php
/**
 * Created by PhpStorm.
 * User: datdx2
 * Date: 8/27/2019
 * Time: 6:29 PM
 */
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
    'app_id' => '2083516388621698',
    'app_secret' => 'e673f7d8caef2c39711074534489428c',
    //'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // optional
]);

try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get(
        '?id=https://beautyexpo.ngoisao.net/bai-du-thi/77.html&fields=engagement',
        '2083516388621698|IbqqQTjLq_HubJxVKkoPcr7Lh6M'
    );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

$graphNode = $response->getGraphNode();

echo "<pre>";
print_r($graphNode);
echo "</pre>";

var_dump($graphNode->getField("engagement")->getField("reaction_count"));
var_dump($graphNode->getField("reaction_count"));
