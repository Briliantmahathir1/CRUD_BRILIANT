<?php

include 'connection.php';

$query = "DELETE FROM `buku` WHERE `Judul` = 'Laskar Pelangi'";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetchAll();

$output = ['delete'];


header('Content-Type: application/json');
echo json_encode($output);