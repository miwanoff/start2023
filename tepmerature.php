<?php
$name = "Температура";
$begin = <<<EOD
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>$name</title>
</head>
<body>
  <h1>$name</h1>\n
EOD;
echo $begin;
$end = <<<EOD
</body>
</html>
EOD;

$x = rand(-30, 50); //-10.5;
$x = (int) $x;
if ($x < 0) {
    echo "  <p style=\"color:blue;\"> $x - Мороз </p>";
} else {
    echo $x;
}
echo $end;
// $x < 0?..:...; 