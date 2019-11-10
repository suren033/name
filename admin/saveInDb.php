<?php
    $var_name = $_POST['var_name'];
    $var_value = $_POST['var_value'];

    include('../conf/connectDb.php');

    $query = $db->query(" UPDATE `content` SET `value`='$var_value' WHERE `name`='$var_name' ");

    header('location: index.php');
?>