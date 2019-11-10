<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE) {
    echo "База данных создана успешно";
    } else {
    echo "Ошибка создания базы данных: " . $conn->error;
    }

    $conn->close();

?>