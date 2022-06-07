<?php
    $signature = $_GET["signature"];
    $timestamp = $_GET["timestamp"];
    $nonce = $_GET["nonce"];
    
    $token = 'Yu3zx'; //php对应微信公众平台配置的token
    $tmpArr = array($token, $timestamp, $nonce);
    sort($tmpArr, SORT_STRING);
    $tmpStr = implode($tmpArr);
    $tmpStr = sha1($tmpStr);
    
    if( $tmpStr == $signature){
        echo $_GET['echostr'];
        exit;
    }else{
        return false;
    }
?>