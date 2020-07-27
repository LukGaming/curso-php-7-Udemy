<?php
$scamdir = scandir("images");
$imagenswdetails = array();
foreach($scamdir as $img){
    if(!in_array($img, array(".", ".."))){
        $file_name = "images".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($file_name);
        array_push($imagenswdetails, $info);
    }
}
echo json_encode($imagenswdetails);

?>