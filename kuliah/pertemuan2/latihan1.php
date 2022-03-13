<?php 
// pertemuan 2, belajar sintaks PHP 

// NILAI
//  angka (integer), tulisan (spring), true/false (boolean)
echo 10; // integer
echo "<br>";
echo "paisal"; //spring
echo "<br>";
echo false; // boolean null
echo "<hr>";

// VARIABEL 
// Tempat menampung NILAI
// awali dengan tanda $ nama nya bebas 
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi 
$nama_depan = "paisal";
echo $nama_depan;
echo "<hr>";

// spring 
// '', ""
$hari = "sabtu";
echo $hari;
echo "<br>" ;
echo "paisal: 'Hallo, Semua!'";
echo "<br>";
// escape character 
// \
echo 'paisal: "selamat hari jum\'at"';
echo "<br>";
echo "paisal: \"selamat hari jum'at\"";
echo'<br>';
// interpolasi
// mencetak langsung isi variabel
// hanya bisa oleh ""
echo "hallo, nama saya $nama_depan";
echo '<br>';
echo 'hallo, nama saya $nama_depan';
echo "<hr>";

// Concat / penggabung string
// .
$nama_depan = "paisal";
$nama_belakang = "ambari";
echo $nama_depan ." ". $nama_belakang;
echo "<br>";
echo 'paisal: "Selamat' . " hari jum'at\"";
echo "<hr>";

// OPERATOR
// Aritmatika 
// +, -, *, // (modulo / modulus / sisa bagi)
echo 1 + 1; // hasil dari 1 + 1 adalah 2;
echo "<br>";
echo "hasil dari 1 + 1 adalah " . 1 + 1;
echo "<br>";
echo (1 + 2) * 3 - 4; // KaBaTaKu
echo "<br>";
echo 10 % 5;
echo "<br>";
echo 1 + "1" + 1;
echo "<hr>";

// Perbandingan
// <, >, <=, >=, ==, !=
echo 1 < 5;
echo "<br>";
echo 1 == 1;
echo "<hr>";

// Identitas / Strict Comparison
// ===, !==
echo 1 === "1";
echo "<hr>";

//  Increment / Decrement
// tambah / kurang 1 
// ++, --
$x = 10;
echo ++$x;
echo "<br>";
echo $x++;
echo "<hr>";











?>
