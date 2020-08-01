<?php
    $array = array(
        "name"=>"LukGaming"
    );
$openssl = openssl_encrypt(
            json_encode($array),
            'AES-128-CBC',
             SECRET,
             0,
            SECRET_IV
        );
echo $openssl;
$descrypt = openssl_decrypt(
    $openssl,
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV);
$descrypt = json_decode($descrypt, true);
echo $descrypt['name'];
?>