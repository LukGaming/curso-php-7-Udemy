<?php
$array = array(
    "nome"=>"Paulo Antonio Ferreira Mendes Macedo",
    "email"=>"thelukgaming333@gmail.com"
);
setcookie("usuario_data", json_encode($array), time()+ 3600);

?>