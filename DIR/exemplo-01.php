<?php
$dirname = "images";
if(!is_dir($dirname)){
    mkdir($dirname);
    echo "Diretório Criado com Sucesso";
}else{
    echo "Diretório já existe<br>";
    rmdir($dirname);
    echo "Removendo Diretório";
}
?>