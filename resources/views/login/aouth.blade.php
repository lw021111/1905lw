<?php 
include "./phpqrcode.blade.php";
$appid="wxdf6c4b67f0287f85";
$uri=urlencode("http://1905lw.lwei.xyz");
$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=$uri&response_type=code&scope=snsapi_userinfo&state=1111#wechat_redirect";
echo $url;

$QR=new RQcode();

$data=$OR->png($url);
echo $data;
 ?>