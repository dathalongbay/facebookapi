<?php
/**
 * Created by PhpStorm.
 * User: datdx2
 * Date: 8/27/2019
 * Time: 5:14 PM
 */
function fbLikeCount($id,$appid,$appsecret){


    $json_url ="https://graph.facebook.com/".$id."?access_token=".$appid."|".$appsecret.
    "&fields=fan_count";

 $json = file_get_contents($json_url);

 $json_output = json_decode($json);


 //Extract the likes count from the JSON object

if($json_output->fan_count){

    return $fan_count = $json_output->fan_count;

}else{

    return 0;

}

}

echo fbLikeCount("http://kenh14.vn/highlands-coffee-van-phuc-vu-do-nhua-cho-khach-nhu-mot-dieu-tat-nhien-nhieu-nguoi-lac-dau-ngan-ngam-vi-sao-nhat-dinh-khong-thay-doi-20190826160437245.chn","2083516388621698","e673f7d8caef2c39711074534489428c");