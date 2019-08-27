<?php
/**
 * Created by PhpStorm.
 * User: datdx2
 * Date: 8/27/2019
 * Time: 5:00 PM
 */

function facebook_count($url){

    // Query in FQL
    $fql  = "SELECT share_count, like_count, comment_count ";
    $fql .= " FROM link_stat WHERE url = '$url'";

    $fqlURL = "https://api.facebook.com/method/fql.query?format=json&query=" . urlencode($fql);

    // Facebook Response is in JSON
    $response = file_get_contents($fqlURL);
    return json_decode($response);

}

$fb = facebook_count('https://itviec.com/');

// facebook share count
echo $fb[0]->share_count;

// facebook like count
echo $fb[0]->like_count;

// facebook comment count
echo $fb[0]->comment_count;