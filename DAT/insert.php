<?php

    include 'connection.php';

    $query = "INSERT INTO `buku`(`Judul`, `Pengarang`, 
     `Halaman`, `Tanggal`, `Abstrak`) VALUES('new judul','new pengarang', 
     '33', '2021-05-05', 'new abstrak 2') ";
    $statement = $connection->query($query);
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $result = $statement->fetchAll();

    $output = ['Insert '];


header('Content-Type: application/json');
echo json_encode($output);

?>