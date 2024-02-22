<?php

$HOST = "localhost";
$DB = "soumba";
$USER = "root";
$PASS = "";
try {
    $connect = new PDO(
        "mysql:host=" . $HOST . ";dbname=" . $DB . ";charset=utf-8",
        $USER,
        $PASS
    );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
    echo $e->getMessage() . "in line" . $e->getLine();
}
