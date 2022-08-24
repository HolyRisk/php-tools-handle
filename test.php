<?php
require_once "vendor/autoload.php";

use Holyrisk\PhpToolsHandle\StringHandle;

$obj = new StringHandle();
$ret = $obj->run();
echo $ret;