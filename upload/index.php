<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $file = $_FILES['images'];
    $dirUpload = "imagens";
    echo $_FILES['images']['tmp_name'];
    if(!is_dir($dirUpload)){
        mkdir($dirUpload);
    }
    
    if(move_uploaded_file($file['tmp_name'], $dirUpload .DIRECTORY_SEPARATOR . $imagem['name'])){
        echo "Upload realizado com sucesso!";
    }
    else{
        echo "Algo de errado nao está certo";
    }
}
?> 