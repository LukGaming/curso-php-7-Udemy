<?php
if(!is_dir("images")){
    mkdir("images");
}
foreach (scandir("images") as $key => $value) {
    if($value != "." || $value != ".." ){
    echo  "$key->$value<br>";
    }
}