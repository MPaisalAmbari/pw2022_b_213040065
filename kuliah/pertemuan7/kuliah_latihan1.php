\<?php
// Superglobals
// variabel bawaan php yang bisa di akses di mana pun
// bentuk nya array associative
// 1. $_GET
// 2. $_POST
// 3. $_SERVER
// $_GET = [
//     'nama' => 'sandhika',
//     'email' => 'sandhika@gmail.com',
// ];
// $_GET['nama'] = 'sandhika';
// $_GET['email'] = 'sandhika@gmail.com';

// var_dump($_GET);

?>

<!-- <h1>Hallo, <?= $_GET['nama']; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=paisal&NPM=213040065&email=paisalambari15@gmail.com">paisal</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=juan&NPM=213040053&email=Juanaditya@gmail.com">juan</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=audi&NPM=213040066&email=Audihezra@gmail.com">audi</a>
    </li>
</ul>