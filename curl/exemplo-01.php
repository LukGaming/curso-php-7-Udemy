<?php
    $cep = "759088554";
    function getDataByCep($cep){
        $link = "https://viacep.com.br/ws/".$cep."/json/";
        $ch = curl_init($link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($result, 1);
        if(!isset($data['cep'])){
           return 0;
        }
        else{
            return $data;
        }
    }    
    
?>