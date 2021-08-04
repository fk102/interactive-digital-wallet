<?php
require 'dbConnect.php';

function submitTran($category, $phone, $amount)
{
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO TRANSACTION (category, phone, amount)
        VALUES (?,?,?)");
    $sql->bind_param("sis", $category, $phone, $amount);
    return $sql->execute();
}
