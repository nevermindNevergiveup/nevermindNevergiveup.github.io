<?php
    //comment these two lines when errors are resolved
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $json = $_POST['data']; //json need to be data
    $info = json_encode($json);
    $file = fopen('test.json','a+') or die("File not found");
    fwrite($file, $info);
    fclose($file);exit;
?>