<?php

include 'connection.php';

$query = "UPDATE `buku` SET `Judul` = 'Shahih Bukhori', `Halaman` = 789, 
`Abstrak` = 'Hadist shahih' WHERE ISBN = 21381309 ";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetchAll();

$output = ['Updated'];


header('Content-Type: application/json');
echo json_encode($output);