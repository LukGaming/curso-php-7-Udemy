<?php
if(isset($_COOKIE["usuario_data"])){
    $user_name_and_email = json_decode($_COOKIE["usuario_data"]);
}
echo $user_name_and_email->nome;
echo "<br>";
echo $user_name_and_email->email;



?>