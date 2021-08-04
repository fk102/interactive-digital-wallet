<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    <h1> Page 2 [Transaction History] </h1>

    <h2>Digital Wallet</h2>
    <ol>
        <li><a href="./home.php">Home</a></li>
        <li><a href="./transaction.php">Transaction History</a></li>
    </ol>
    <?php
    //require './dbHistory.php';
    require './historySearch.html';
    ?>

    <?php


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


</body>

</html>