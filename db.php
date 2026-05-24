<?php

$host = "db";
$user = "webuser";
$password = "web321";
$database = "bytebazar";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

?>
