<?php
declare(strict_types=1);
$data = array(
    [1, 'neko'],
    [2, 'poi']
)
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML Intro</title>
    </head>
    <body>
        <h1 align="center">dotcchi1x</h1>
        <hr color="#ff0000">
        <p><s>Invalid!</s><sub>afh iyh?</sub></p>
        <!-- Singkatan singkatan -->
        <abbr title="Neural Network">NN</abbr>
        <ol>
            <?php for ($i=0; $i < 5; $i++) { ?>
                <li><?= $i ?></li>
            <?php } ?>
        </ol>
    </body>
</html>