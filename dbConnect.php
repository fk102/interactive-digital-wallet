<?php
function connect()
{
    $conn = new mysqli("localhost", "root", "", "digital-wallet");
    if ($conn->connect_errno) {
        die("Connection Failed" . $conn->connect_error);
    }
    return $conn;
}
