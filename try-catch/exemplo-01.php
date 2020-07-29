<?php
function trataNome($nome){
    if(!$nome){
        throw new Exception("Nome Invalido ou vazio", 1);
    }
}
try {
    trataNome();
} catch (Exception $e) {
    echo $e->getMessage()."<br>";
    echo $e->getError();
}
finally{
    echo "<br>Bloco try executado";
}
?>