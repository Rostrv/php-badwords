<?php
$text = "blue his house
with a blue little window
and a blue corvette
and everything is blue for him
and himself and everybody around
cause he ain't got nobody to listen to";
$badword = $_GET['badword'];
$censored = str_replace($badword, '***', $text);
$length = strlen($text);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Uncensored</h1>
    <p><?= $text ?></p>
    <h2>Censored</h2>
    <p><?= $censored ?></p>
    <h3>Paragraph length</h3>
    <p> the paragraph length is <?= strlen($censored) ?> characters</p>
</body>
</html>