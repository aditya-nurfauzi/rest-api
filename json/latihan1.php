<?php

//  $mahasiswa = [
//      [
//         "nama" => "Aditya",
//         "nrp" => "173040045",
//         "email" => "aditya@gmail.com"
//      ],
//      [
//         "nama" => "Ucup",
//         "nrp" => "173040033",
//         "email" => "ucup@gmail.com"
//      ]
//  ];

$dbh = new PDO('mysql:host=localhost;dbname=laravel', 'root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
