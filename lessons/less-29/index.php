<?php

function df($MySTR, $FILE = 'MyLog.txt') {
    $date = date("Y-m-d G:i:s");
    $fp = fopen($_SERVER["DOCUMENT_ROOT"] . $FILE, 'a+');
    $str = $date . " " . print_r($MySTR, true) . "\r\n";
    fwrite($fp, $str);
    fclose($fp);
}