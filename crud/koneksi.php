<?php
$USER = 'root';
$PASSWORD = '';
$DB = 'mykartun';
$SRVER = 'localhost';

$KONEKSI = mysqli_connect(
    $SRVER, $USER, $PASSWORD, $DB
);
