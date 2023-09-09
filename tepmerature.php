<?php
$r = rand(5, 500);
$s = round(M_PI * $r ** 2);

$start = <<<EOD
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Площа кола</title>
</head>
<body>
<h2>3.3 Площа кола</h2>
<p>Площа - <b>$s</b></p>
EOD;
echo $start;
$r = rand(50, 200);
echo "<div style=\"background-color: lightblue; border-radius: 50%; width: 200px; height: 200px;\"></div>";
echo "<div style=\"background-color: lightblue; border-radius: 50%; width: ".(2 * $r)."px; height: ".(2 * $r)."px;\"></div>";

$end = <<<EOD
</body>
</html>
EOD;
echo $end;