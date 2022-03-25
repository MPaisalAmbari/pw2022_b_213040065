<?php

$Smartphone = [
    [
        "Merk" => "Apple",
        "Tipe" => "IPhone 12 Pro",
        "Spesifikasi" => "Chipset A14 Bionic Kapasitas 128 GB, 256 GB, 512 GB",
        "Harga" => "Rp.15.799.000 [IBOX} ",
        "Gambar" => "iphone.jpeg",
    ],
 
    [
        
        "Merk" => "Apple",
        "Tipe" => "IPhone 12 Pro Max",
        "Spesifikasi" => "Chipset A14 Bionic Kapasitas 128 GB, 256 GB, 512 GB",
        "Harga" => "Rp.17.799.000 [IBOX} ",
        "Gambar" => "iphone1.jpeg",
    ]
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone</title>
</head>

<body>
    <h1>Smartphone</h1>

    <?php foreach ($Smartphone as $l) : ?>
        <ul>
            <li>
                <img src="img/<?= $l["Gambar"]; ?>" alt="" width="100px" height="auto">
            </li>
            <Li>Merk : <?= $l["Merk"]; ?></li>
            <li>Type : <?= $l["Tipe"]; ?></li>
            <li>Spek : <?= $l["Spesifikasi"]; ?></li>
            <li>Harga : <?= $l["Harga"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>