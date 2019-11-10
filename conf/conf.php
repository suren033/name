<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE conf (
        id INT(255),
        name VARCHAR(255),
        value VARCHAR(255)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tаблицa успешно создана";
    } else {
        echo "Ошибка создания таблиц: " . $conn->error;
    }

    $conn->close();
?>