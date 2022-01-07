<?php
require 'common.php';
$http_status_code = require 'http-status-code.php';
$http_status_code_encode = [];
foreach ($http_status_code as $k => $v) {
    $http_status_code_encode[json_quote_single_to_double($k)] = json_quote_single_to_double($v);
}
return $http_status_code_encode;