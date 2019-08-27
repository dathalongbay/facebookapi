<?php
/**
 * Created by PhpStorm.
 * User: datdx2
 * Date: 8/27/2019
 * Time: 5:14 PM
 */
function fbLikeCount($id,$appid,$appsecret){


    $json_url ="https://graph.facebook.com/".$id."/likes?access_token=".$appid."|".$appsecret;

 $json = file_get_contents($json_url);

var_dump($json);
 echo "<pre>";
 print_r($json);
 echo "</pre>";
 $json_output = json_decode($json);

    echo "<pre>";
    print_r($json_output);
    echo "</pre>";


 //Extract the likes count from the JSON object

if($json_output->fan_count){

    return $fan_count = $json_output->fan_count;

}else{

    return 0;

}

}

echo fbLikeCount("oi-20190826160437245.chn","2083516388621698","e673f7d8caef2c39711074534489428c");