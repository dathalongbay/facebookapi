<?php
/**
 * Created by PhpStorm.
 * User: datdx2
 * Date: 8/27/2019
 * Time: 6:29 PM
 */


try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get(
        '/https://zing.vn/likes',
        'EAAdm8nY6PYIBAD5tOTsSQJZBW0mLK6aK3kW2Ve2VBkNj33mMmBoHhk33KZBa6KgZBEW5hXoTAIs3ZAMudwGP5EDUiq2Dbm9d10Yp8ehMXud5mtgcmxzm9P99pEaLzgnWhVRceSqWv45tDDCZAfiB4kJziO53xrnmzQXJXuQecAPWmTW3JZCEyEtWZAq4ZBz7RlbcNDU3p5OZCTAZDZD'
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