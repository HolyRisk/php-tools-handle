<?php
require_once "vendor/autoload.php";

use Holyrisk\TpLayuiPage\StringHandle;

$obj = new StringHandle();
$ret = $obj->run();
echo $ret;