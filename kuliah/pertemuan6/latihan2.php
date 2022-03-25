<?php 

$mahasiswa = [
     ["M Paisal Ambari", "213040065", "paisalambari15@gmail.com", "Teknik Informatika"],
     ["Harald Arkan", "256361000", "dragonarkan@gmail.com", "Teknik Mesin"]
     ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nrp" => "213040065",
        "nama" => "M Paisal Ambari",
        "email" => "paisalambari15@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "org1.png"
    ],
    [
        "nama" => "Harald Arkan",
        "nrp" => "256361000",
        "email" => "dragonarkan@gmail.com",
        "jurusan" => "teknik mesin",
        "gambar" => "org2.png"
    ]
];
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>

     <?php foreach($mahasiswa as $mhs) :?>
     <ul>
         <li>
             <img src="img/<?=$mhs["gambar"]; ?>">
         </li>
         <li>Nama :<?php echo $mhs["nama"]; ?></li>
         <li>NPM :<?php echo $mhs["nrp"]; ?></li>
         <li>Email :<?php echo $mhs["email"]; ?></li>
         <li>Jurusan :<?php echo $mhs["jurusan"]; ?></li>
     </ul>
     <?php endforeach ; ?>
 </body>
 </html>