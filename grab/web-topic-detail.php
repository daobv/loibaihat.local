<?php

$url='http://mp3.m.zing.vn/web/topic/detail?'.$_SERVER['QUERY_STRING'];
include'get-and-edit.php';
include'head.php';
echo $html;
include'foot.php';
?>