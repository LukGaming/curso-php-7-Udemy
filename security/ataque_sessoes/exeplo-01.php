<?php
    session_start();
    //dps de verificara login e senha reinicie o id
    session_destroy();
    session_start();
    session_regenerate_id();
    echo session_id();


?>