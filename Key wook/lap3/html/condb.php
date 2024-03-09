<?php

$host = "db";
$user = "root";
$pass = "1234";
$db = "internet";

try {
    $conn = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($conn, "SET NAMES utf8");
} catch (Exception $e) {
    $error = $e->getMessage();
    echo $error;
}