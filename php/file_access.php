<?php

$file = fopen("php/data.txt", "a");

fwrite($file, "abc6a6", 1024);
fclose($file);
