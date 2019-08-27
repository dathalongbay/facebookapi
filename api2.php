<?php
/**
 * Created by PhpStorm.
 * User: datdx2
 * Date: 8/27/2019
 * Time: 6:15 PM
 */

require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
    'app_id' => '2083516388621698',
    'app_secret' => 'e673f7d8caef2c39711074534489428c',
    //'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // optional
]);

$access_token =  $fb->getAccessToken();

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

try {
    // Get the \Facebook\GraphNodes\GraphUser object for the current user.
    // If you provided a 'default_access_token', the '{access-token}' is optional.
    $response = $fb->get('/me', 'EAAdm8nY6PYIBAD5tOTsSQJZBW0mLK6aK3kW2Ve2VBkNj33mMmBoHhk33KZBa6KgZBEW5hXoTAIs3ZAMudwGP5EDUiq2Dbm9d10Yp8ehMXud5mtgcmxzm9P99pEaLzgnWhVRceSqWv45tDDCZAfiB4kJziO53xrnmzQXJXuQecAPWmTW3JZCEyEtWZAq4ZBz7RlbcNDU3p5OZCTAZDZD');
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();