<?php
$name = "John";

$str = <<<EOD
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>$name</title>
</head>
EOD;
echo $str;
