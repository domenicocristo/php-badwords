<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <?php
    $helloWorld = "Hello World Earth";

    $wordToCensore = str_replace('Earth', '***', $helloWorld);
    ?>
    <h1><?php echo $wordToCensore ?></h1>
</body>
<style>
    body {
        text-align: center;
    }
</style>
</html>