<?php

$hours = date('G');
$greeting = 'navond';

if($hours < 6) {
    $greeting = 'nacht';
} else if($hours < 12) {
    $greeting = 'morgen';
} else if($hours < 18) {
    $greeting = 'middag';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        Goede<?= $greeting; ?>
    </p>
</body>
</html>