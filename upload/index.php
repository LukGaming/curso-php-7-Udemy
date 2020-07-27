<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors',TRUE);
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $arquivos = $_FILES["uploads_archives"];
    $diretorio = "uploads";
    if($arquivos['error']){
        throw new Exception("Erro encontrado".$arquivos['error']);        
    }
    if(!is_dir($diretorio)){
        mkdir($diretorio);
        echo "Diretório $diretorio Criado com sucesso<br>";
    }
    if(move_uploaded_file($arquivos['tmp_name'], $diretorio.DIRECTORY_SEPARATOR.$arquivos['name'])){
        echo "upload realizado com sucesso";
    }
    else{
        throw new Exception("Não foi possível realizar o upload");
        
    }
    
}
?> 