<?php
require "condb.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO tb_member VALUES('$id','$name','$email')";

try {
    mysqli_query($conn, $sql);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo "error";
}