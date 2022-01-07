<?php
$arr = require "./http-status-code.php";
$arr2 = [];
foreach ($arr as $k => $v){
    $k = str_replace("'", '"', $k);
    $v = str_replace("'", '"', $v);
    $arr2[$k] = $v;
}
return $arr2;
