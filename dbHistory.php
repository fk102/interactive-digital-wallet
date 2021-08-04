<style>
    table {
        width: 50%;
        border-collapse: collapse;
    }

    table,
    td,
    th {
        border: 1px solid black;
        padding: 5px;
    }

    th {
        text-align: left;
    }
</style>
<?php
require 'dbConnect.php';

$time = $_GET['time'];
$time = $time . "%";
$conn = connect();
$sql = $conn->prepare("SELECT * FROM TRANSACTION WHERE time LIKE ?");
$sql->bind_param("s", $time);
$sql->execute();
$res = $sql->get_result();
$count = $res->num_rows;
echo "TOTAL RECORDS: " . $count;
echo "<table>";
echo "<tr><th>Transaction Category </th>";
echo "<th>To </th>";
echo "<th>Amount </th>";
echo "<th> Transferred On</th></tr>";
while ($row = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td>" . $row['category'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['amount'] . "</td>";
    echo "<td>" . $row['time'] . "</td>";
    echo "</tr>";
}
echo "</table>";
