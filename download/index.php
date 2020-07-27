<?php
$link = "https://www.google.com/logos/doodles/2020/jeanne-barets-280th-birthday-6753651837108693-l.png";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse['path']);
$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);
?>