<?php
require 'login.php';
$hn = 'localhost';
$db = 'starbuck';
$un = 'root';
$pw = '';
$conn = new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error)die($conn->connect_error);
$query = "SELECT * FROM coffee";
$result = $conn->query($query);
if (!$result) die ($conn->error);

$rows = $result->num_rows;

for ($j=0 ; $j < $rows ; ++$j)
{
    $result->data_seek($j);
    echo 'ID: ' .$result->fetch_assoc()['id'] .'<br>';
    $result->data_seek($j);
    echo 'Name: ' .$result->fetch_assoc()['name'] .'<br>';
    $result->data_seek($j);
    echo 'Type: ' .$result->fetch_assoc()['type'] .'<br>';
    $result->data_seek($j);
    echo 'Year: ' .$result->fetch_assoc()['size'] .'<br>';
    $result->data_seek($j);
    echo 'Price: ' .$result->fetch_assoc()['price'] .'<br>';



}

$result->close();
$conn->close();
?>