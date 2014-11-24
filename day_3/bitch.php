<?php

$text = file_get_contents('bitch.txt');
$paragraph = explode("\r\n\r\n", $text);
krsort($paragraph);
$text2 = implode("\r\n\r\n", $paragraph);
$text2 = str_replace("name", "fuckass", $text2);
var_dump($text2);

//count
//unset